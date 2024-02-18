<?php

namespace App\Livewire;

use App\Models\Etab;
use Livewire\Component;
use App\Models\Pedagogie;
use App\Models\Historique;
use App\Models\PresidentStory;

class HistoriquePage extends Component
{
    public $images_cover;
    public $slogan;
    public $intro;
    public $body;

    public function mount()
    {
        $histo = Historique::first();
        $this->slogan = $histo->slogan;
        $this->intro = $histo->intro;
        $this->body  = $histo->html;
        $this->images_cover       = explode(',', $histo->images_cover);
    }


    public function render()
    {
        $parcours = Pedagogie::where('parcour', '!=', NULL)->pluck('parcour')->toArray();

        $tags = [];
        foreach ($parcours as $parcour) {
            $tags = array_merge($tags, explode(',', $parcour));
        }


        return view('livewire.historique.index', [

            'facultes'      => Etab::where('status', true)->where('rubrique_id', 3)->get(),
            'instituts'     => Etab::where('status', true)->where('rubrique_id', 2)->get(),
            'ecoles'        => Etab::where('status', true)->where('rubrique_id', 1)->get(),
            'doctorales'    => Etab::where('status', true)->where('rubrique_id', 5)->get(),

            'parcours'      => $tags,

            'liste_presidents'  => PresidentStory::orderby('is_current', 'desc')->get(),

        ]);
    }
}
