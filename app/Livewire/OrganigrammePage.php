<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\President;
use App\Models\Organigramme;


class OrganigrammePage extends Component
{
    public $image_path;
    public $intro;
    public $body;
    public $photo;

    public function mount()
    {
        $president = President::where('is_active', true)->first();
        $orga = Organigramme::first();
        $this->intro             = $orga->intro;
        $this->body              = $orga->html;
        $this->image_path        = $orga->image_path;
        $this->photo             = $president->image_path;
    }


    public function render()
    {
        return view('livewire.university.page_orga');
    }
}
