<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReglesSeeder extends Seeder
{
    public function run()
    {
        DB::table('regles')->truncate();

        DB::table('regles')->insert([
            [
                'title' => 'Titre de la règle 1',
                'slug' => Str::slug('Titre de la règle'),
                'uuid' => Str::uuid(),
                'type' => false,
                'body' => 'Description détaillée de la règle 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Titre de la règle 2',
                'slug' => Str::slug('Titre de la règle'),
                'uuid' => Str::uuid(),
                'type' => true,
                'body' => 'Description détaillée de la règle 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
