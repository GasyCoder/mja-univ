<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Historique;

class HistoriqueSeeder extends Seeder
{
    public function run()
    {
        Historique::create([
            'slogan' => 'Votre slogan ici',
            'intro' => 'Votre introduction ici',
            'body' => 'Votre corps de texte ici',
            'images_cover' => 'Votre lien vers l\'image de couverture ici',
        ]);
    }
}
