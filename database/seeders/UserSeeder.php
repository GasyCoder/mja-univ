<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Admin User
        $admin = User::create([
            'name' => 'Florent',
            'email' => 'bezaraflorent@gmail.com',
            'is_active'   => true,
            'password' => Hash::make('adminx@x.com?')
        ]);
        $admin->assignRole('admin');

        // Creating Redacteur User
        $redacteur = User::create([
            'name' => 'Redacteur',
            'email' => 'redacteur@mail.com',
            'is_active'   => true,
            'password' => Hash::make('redacteur')
        ]);
        $redacteur->assignRole('redacteur');

    }
}
