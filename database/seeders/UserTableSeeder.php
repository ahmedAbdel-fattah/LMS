<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create or get the admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('111'), // Always hash passwords
                'role' => 'admin',
                'status' => '1',
            ]
        );

        // Create or get the Admin role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Get all permissions
        $permissions = Permission::all();
        if ($permissions->isNotEmpty()) {
            // Sync permissions to the admin role
            $adminRole->syncPermissions($permissions);
        }

        // Assign the admin role to the user
        $admin->assignRole($adminRole->name);

        // Create or get instructors
        $instructors = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'username' => 'john_doe'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'username' => 'jane_smith'],
            ['name' => 'Mark Johnson', 'email' => 'mark@example.com', 'username' => 'mark_johnson'],
            ['name' => 'Emily Davis', 'email' => 'emily@example.com', 'username' => 'emily_davis'],
            ['name' => 'David Brown', 'email' => 'david@example.com', 'username' => 'david_brown'],
            ['name' => 'Sophia Lee', 'email' => 'sophia@example.com', 'username' => 'sophia_lee'],
            ['name' => 'Daniel White', 'email' => 'daniel@example.com', 'username' => 'daniel_white'],
            ['name' => 'Olivia Harris', 'email' => 'olivia@example.com', 'username' => 'olivia_harris'],
            ['name' => 'James Walker', 'email' => 'james@example.com', 'username' => 'james_walker'],
            ['name' => 'Benjamin Scott', 'email' => 'benjamin@example.com', 'username' => 'benjamin_scott'],
            ['name' => 'Mia Clark', 'email' => 'mia@example.com', 'username' => 'mia_clark'],
            ['name' => 'Charlotte Lewis', 'email' => 'charlotte@example.com', 'username' => 'charlotte_lewis'],
            ['name' => 'Lucas Young', 'email' => 'lucas@example.com', 'username' => 'lucas_young'],
            ['name' => 'Amelia King', 'email' => 'amelia@example.com', 'username' => 'amelia_king'],
            ['name' => 'Ethan Wright', 'email' => 'ethan@example.com', 'username' => 'ethan_wright'],
            ['name' => 'Isabella Hill', 'email' => 'isabella@example.com', 'username' => 'isabella_hill'],
            ['name' => 'Alexander Adams', 'email' => 'alexander@example.com', 'username' => 'alexander_adams'],
            ['name' => 'Liam Martinez', 'email' => 'liam@example.com', 'username' => 'liam_martinez'],
            ['name' => 'Chloe Perez', 'email' => 'chloe@example.com', 'username' => 'chloe_perez'],
            ['name' => 'Gabriel Gonzalez', 'email' => 'gabriel@example.com', 'username' => 'gabriel_gonzalez']
        ];

        // Create or get the Instructor role
        $instructorRole = Role::firstOrCreate(['name' => 'instructor']);

        foreach ($instructors as $instructorData) {
            $instructor = User::firstOrCreate(
                ['email' => $instructorData['email']],
                [
                    'name' => $instructorData['name'],
                    'username' => $instructorData['username'],
                    'password' => Hash::make('111'), // Always hash passwords
                    'role' => 'instructor',
                    'status' => '1',
                ]
            );

            // Assign the instructor role to the user
            if (!$instructor->hasRole('instructor')) {
                $instructor->assignRole($instructorRole->name);
            }
        }

        // Create 21 regular users
        $users = [
            ['name' => 'User One', 'email' => 'user1@example.com', 'username' => 'user1'],
            ['name' => 'User Two', 'email' => 'user2@example.com', 'username' => 'user2'],
            ['name' => 'User Three', 'email' => 'user3@example.com', 'username' => 'user3'],
            ['name' => 'User Four', 'email' => 'user4@example.com', 'username' => 'user4'],
            ['name' => 'User Five', 'email' => 'user5@example.com', 'username' => 'user5'],
            ['name' => 'User Six', 'email' => 'user6@example.com', 'username' => 'user6'],
            ['name' => 'User Seven', 'email' => 'user7@example.com', 'username' => 'user7'],
            ['name' => 'User Eight', 'email' => 'user8@example.com', 'username' => 'user8'],
            ['name' => 'User Nine', 'email' => 'user9@example.com', 'username' => 'user9'],
            ['name' => 'User Ten', 'email' => 'user10@example.com', 'username' => 'user10'],
            ['name' => 'User Eleven', 'email' => 'user11@example.com', 'username' => 'user11'],
            ['name' => 'User Twelve', 'email' => 'user12@example.com', 'username' => 'user12'],
            ['name' => 'User Thirteen', 'email' => 'user13@example.com', 'username' => 'user13'],
            ['name' => 'User Fourteen', 'email' => 'user14@example.com', 'username' => 'user14'],
            ['name' => 'User Fifteen', 'email' => 'user15@example.com', 'username' => 'user15'],
            ['name' => 'User Sixteen', 'email' => 'user16@example.com', 'username' => 'user16'],
            ['name' => 'User Seventeen', 'email' => 'user17@example.com', 'username' => 'user17'],
            ['name' => 'User Eighteen', 'email' => 'user18@example.com', 'username' => 'user18'],
            ['name' => 'User Nineteen', 'email' => 'user19@example.com', 'username' => 'user19'],
            ['name' => 'User Twenty', 'email' => 'user20@example.com', 'username' => 'user20'],
            ['name' => 'User Twenty-One', 'email' => 'user21@example.com', 'username' => 'user21']
        ];

        // Create or get the User role
        $userRole = Role::firstOrCreate(['name' => 'user']);

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'username' => $userData['username'],
                    'password' => Hash::make('111'), // Always hash passwords
                    'role' => 'user',
                    'status' => '1',
                ]
            );

            // Assign the user role to the user
            if (!$user->hasRole('user')) {
                $user->assignRole($userRole->name);
            }
        }
    }
}
