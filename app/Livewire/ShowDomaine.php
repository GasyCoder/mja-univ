<?php

namespace App\Livewire;

use App\Models\Domaine;
use Livewire\Component;

class ShowDomaine extends Component
{
    public $name, $resume, $icon_path, $domaine, $uuid;

    public function mount($uuid)
    {
        $this->domaine = Domaine::where('uuid', $uuid)->firstOrfail();
        $this->name = $this->domaine->name;
        $this->resume = $this->domaine->resume;
        $this->icon_path  = $this->domaine->icon_path;
    }

    public function render()
    {
        return view('livewire.domaine.index', [

            'domaines' => Domaine::where('is_active', true)->where('uuid', '!=', $this->uuid)->get(),
        ]);
    }
}
