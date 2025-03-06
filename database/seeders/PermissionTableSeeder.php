<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define an array of permissions with group_name and guard_name
        $permissions = [

            ['name' => 'category.menu', 'group_name' => 'Category', 'guard_name' => 'web'],
            ['name' => 'category.all', 'group_name' => 'Category', 'guard_name' => 'web'],
            ['name' => 'subcategory.all', 'group_name' => 'Category', 'guard_name' => 'web'],
            ['name' => 'instructor.menu', 'group_name' => 'Instructor', 'guard_name' => 'web'],

        ];

        // Loop through each permission and create it if it does not exist
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission['name'],
                'group_name' => $permission['group_name'],
                'guard_name' => $permission['guard_name']
            ]);
        }
    }
}