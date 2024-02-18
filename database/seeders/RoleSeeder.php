<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::create([
            'name' => 'admin',
            'label' => 'Administrateur',
            'description' => 'Administrateur de Système'
        ]);
        $redacteur = Role::create([
            'name' => 'redacteur',
            'label' => 'Redacteur',
            'description' => 'Redacteur expert'
        ]);

        $admin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-post',
            'edit-post',
            'delete-post',
            'view-post',
            'comment-post',
            'comment-delete',
            'dashboard',
            'admin',
        ]);

        $redacteur->givePermissionTo([
            'create-post',
            'edit-post',
            'delete-post',
            'view-post',
            'comment-post',
            'comment-delete',
            'dashboard',
            'redacteur',
        ]);

    }
}
