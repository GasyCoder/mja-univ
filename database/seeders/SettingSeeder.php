<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'site_name' => 'Mon site',
            'copyright' => '2024 Mon site',
            'email' => 'contact@monsite.com',
            'slogan'  => 'Slogan de l\'université de Mahajanga',
            'phone' => '0123456789',
            'adresse' => '123 rue de la ville',
            'description' => 'Ceci est une description de mon site.',
            'keywords' => 'mot-clé1, mot-clé2, mot-clé3',
            'is_slider' => true,
            'is_siteactive' => true,
            'type_header'   => false,
            'message_disabled' => 'Le site est actuellement désactivé.',
            'logo'              => 'logo.jpg',
            'facebook' => 'https://www.facebook.com/monsite',
            'twitter' => 'https://twitter.com/monsite',
            'linkdin' => 'https://www.linkedin.com/in/monsite',
        ]);
    }
}
