<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\President;

class MotPresident extends Component
{

    public $image_path;
    public $name;
    public $intro;
    public $body;
    public $bg_color;
    public $is_active;


    public function mount()
    {

        $mot_president = President::where('is_active', true)->first();

        $this->name             = $mot_president->name ?? null;
        $this->intro            = $mot_president->intro ?? null;
        $this->body             = $mot_president->html ?? null;
        $this->bg_color         = $mot_president->bg_color ?? null;

        $this->image_path      = $mot_president->image_path ?? null;
    }

    public function render()
    {
        return view('livewire.mot.mot-president');
    }
}
