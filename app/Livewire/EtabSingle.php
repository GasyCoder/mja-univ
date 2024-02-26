<?php

namespace App\Livewire;

use App\Models\Etab;
use Livewire\Component;

class EtabSingle extends Component
{
    public $name;
    public $sigle;
    public $director;
    public $slogan;
    public $about;
    public $image_path;
    public $uuid;
    public $status, $type_etabs;

    public $diplomes, $mention, $parcour, $respo_mention, $respo_parcour;
    public $enseignant, $etudiant, $personnel, $vacataire;
    public $enseignantPourcentage, $etudiantPourcentage, $personnelPourcentage, $vacatairePourcentage;
    public $phone_1, $phone_2, $email, $siteweb, $facebook, $adresse;

    public function mount($uuid)
    {
        $single = Etab::where('uuid', $uuid)->first();
        if ($single) {
        $this->status       = $single->type->slug == 'facultes';
        $this->type_etabs   = $single->type->slug == 'ecoles-doctorale';
        $this->name         = $single->name;
        $this->sigle        = $single->sigle;
        $this->director     = $single->director;
        $this->slogan       = $single->slogan;
        $this->about        = $single->html;
        $this->image_path   = $single->image_path;

        $this->phone_1      = $single->contact->phone_1;
        $this->phone_2      = $single->contact->phone_2;
        $this->email        = $single->contact->email;
        $this->siteweb      = $single->contact->siteweb;
        $this->facebook     = $single->contact->facebook;
        $this->adresse      = $single->contact->adresse;

        $this->enseignant   = $single->statistiques->sum('enseignant');
        $this->etudiant     = $single->statistiques->sum('etudiant');
        $this->personnel    = $single->statistiques->sum('personnel');
        $this->vacataire    = $single->statistiques->sum('vacataire');

        $this->diplomes = [];
        $this->mention = [];
        $this->parcour = [];

        foreach ($single->pedagogies as $pedagogie) {
            $this->diplomes = array_merge($this->diplomes, explode(',', $pedagogie->diplomes));
            $this->mention = array_merge($this->mention, explode(',', $pedagogie->mention));
            $this->parcour = array_merge($this->parcour, explode(',', $pedagogie->parcour));
        }

        }
    }


    public function render()
    {
        // Find the etab with the given uuid or fail with a 404 error
        $etab = Etab::where('uuid', $this->uuid)->firstOrFail();

        return view('livewire.etablissement.single', [

            'autres'  => Etab::where('uuid', '!=', $this->uuid)->where('status', true)
                ->where('type_id', '!=', 5)->get(),

            'doctorales'  => Etab::where('uuid', '!=', $this->uuid)->where('type_id', 5)->get(),
        ]);
    }

}
