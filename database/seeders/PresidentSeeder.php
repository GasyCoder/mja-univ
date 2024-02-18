<?php

namespace Database\Seeders;

use App\Models\President;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        President::create([
            'name' => 'President 1',
            'uuid' => Str::uuid(),
            'intro' => 'Intro for President 1',
            'body' => 'Body for President 1',
            'photo' => 'path/to/photo1.jpg',
            'is_active'   => true,
        ]);
    }
}
