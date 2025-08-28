<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::FirstOrCreate(['name' => 'super-admin'] , ['guard_name' => 'admins']);

        $actions = ['create', 'read', 'update', 'delete'];
        $resources = [
            'settings',
            'categories',
            'jobs',
            'applications',
            'blogs',
            'clients',
            'news',
            'projects',
            'admins',
            'roles',
        ];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                $permissionName = "{$action}_{$resource}";
                $permission = Permission::FirstOrCreate(['name' => $permissionName] , ['guard_name' => 'admins']);
                $role->givePermissionTo($permission);
            }
        }

        $admins = Admin::all();

        foreach ($admins as $admin) {
            $admin->assignRole($role);
        }
    }
}
