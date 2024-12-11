<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(
            ['name' => 'Admin', 'color' => 'red'],

        );

        $permissions = [
            ['name' => 'view_community_details'],
            ['name' => 'view_communities'],
            ['name' => 'create_community'],
            ['name' => 'update_community'],
            ['name' => 'delete_community'],
        ];

        foreach ($permissions as $permission) {
            $perm = Permission::create($permission);
            $adminRole->permissions()->attach($perm);
        }
    }
}
