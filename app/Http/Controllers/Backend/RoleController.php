<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
{
    // Show all permissions
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('admin.backend.pages.permission.all_permission', compact('permissions'));
    }

    // Show add permission form
    public function AddPermission()
    {
        return view('admin.backend.pages.permission.add_permission');
    }

    // Store new permission
    public function StorePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
        ]);

        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission')->with([
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Show edit permission form
    public function EditPermission($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return redirect()->back()->with([
                'message' => 'Permission not found!',
                'alert-type' => 'error',
            ]);
        }

        return view('admin.backend.pages.permission.edit_permission', compact('permission'));
    }

    // Update permission
    public function UpdatePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
        ]);

        $permission = Permission::find($request->id);

        if (!$permission) {
            return redirect()->back()->with([
                'message' => 'Permission not found!',
                'alert-type' => 'error',
            ]);
        }

        $permission->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission')->with([
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Delete permission
    public function DeletePermission($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return redirect()->back()->with([
                'message' => 'Permission not found!',
                'alert-type' => 'error',
            ]);
        }

        $permission->delete();
        return redirect()->back()->with([
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Show all roles
    public function AllRoles()
    {
        $roles = Role::all();
        return view('admin.backend.pages.roles.all_roles', compact('roles'));
    }

    // Show add role form
    public function AddRoles()
    {
        return view('admin.backend.pages.roles.add_roles');
    }

    // Store new role
    public function StoreRoles(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('all.roles')->with([
            'message' => 'Role Created Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Show edit role form
    public function EditRoles($id)
    {
        $roles = Role::find($id);

        if (!$roles) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        return view('admin.backend.pages.roles.edit_roles', compact('roles'));
    }

    // Update role
    public function UpdateRoles(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Role::find($request->id);

        if (!$role) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('all.roles')->with([
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success',
        ]);
    }


    // Delete role
    public function DeleteRoles($id)
    {
        $roles = Role::find($id);

        if (!$roles) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        $roles->delete();
        return redirect()->back()->with([
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Add role permissions
    public function AddRolesPermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('admin.backend.pages.rolesetup.add_roles_permission', compact('roles', 'permission_groups', 'permissions'));
    }

    // Store role permissions
    public function RolePermissionStore(Request $request)
    {
        if (empty($request->permission)) {
            return redirect()->back()->with([
                'message' => 'Please select at least one permission.',
                'alert-type' => 'error',
            ]);
        }

        foreach ($request->permission as $permission) {
            $exists = DB::table('role_has_permissions')
                        ->where('role_id', $request->role_id)
                        ->where('permission_id', $permission)
                        ->exists();

            if (!$exists) {
                DB::table('role_has_permissions')->insert([
                    'role_id' => $request->role_id,
                    'permission_id' => $permission,
                ]);
            }
        }

        return redirect()->route('all.roles.permission')->with([
            'message' => 'Role Permission Added Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Show all role permissions
    public function AllRolesPermission()
    {
        $roles = Role::all();
        return view('admin.backend.pages.rolesetup.all_roles_permission', compact('roles'));
    }

    // Edit role permissions
    public function AdminEditRoles($id)
    {
        $roles = Role::find($id);
        if (!$roles) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('admin.backend.pages.rolesetup.edit_roles_permission', compact('roles', 'permission_groups', 'permissions'));
    }

    // Update role permissions
    public function AdminUpdateRoles(Request $request, $id)
    {
        // Find the role by ID
        $role = Role::findOrFail($id);

        // Ensure the role exists
        if (!$role) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        // Get all permission IDs from the database
        $permissions = Permission::pluck('id')->toArray();

        // Get the permissions from the request
        $selectedPermissions = $request->input('permission', []);

        // Ensure that all selected permissions are valid
        $invalidPermissions = array_diff($selectedPermissions, $permissions);

        if (!empty($invalidPermissions)) {
            return redirect()->back()->with([
                'message' => 'One or more permissions are invalid.',
                'alert-type' => 'error',
            ]);
        }

        // Sync the permissions with the role
        $role->permissions()->sync($selectedPermissions);

        // Clear cached permissions to refresh
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // Redirect with success message
        return redirect()->route('all.roles.permission')->with([
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Delete role permissions
    public function AdminDeleteRoles($id)
    {
        $roles = Role::find($id);

        if (!$roles) {
            return redirect()->back()->with([
                'message' => 'Role not found!',
                'alert-type' => 'error',
            ]);
        }

        $roles->delete();
        return redirect()->back()->with([
            'message' => 'Role Permission Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    // Import permissions
    public function ImportPermission()
    {
        return view('admin.backend.pages.permission.import_permission');
    }

    // Export permissions
    public function Export()
    {
        return Excel::download(new PermissionExport, 'permissions.xlsx');
    }

    // Handle permission import
    public function Import(Request $request)
    {
        if ($request->hasFile('import_file')) {
            Excel::import(new PermissionImport, $request->file('import_file'));
            return back()->with('success', 'Permissions imported successfully!');
        }
        return back()->with('error', 'No file selected for import.');
    }
}