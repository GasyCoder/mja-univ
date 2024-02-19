<?php

namespace Database\Seeders;

use App\Models\Organigramme;
use Illuminate\Database\Seeder;

class OrganigrammeSeeder extends Seeder
{
    public function run()
    {
        Organigramme::create([
            'intro' => 'Votre introduction ici',
            'body' => 'Votre corps de texte ici',
            'image_path' => 'Votre lien vers l\'image de couverture ici',
        ]);
    }
}
