<?php

namespace App\Livewire;

use App\Models\Regle;
use Livewire\Component;

class ReglesPage extends Component
{

    public $title;
    public $type = false;
    public $body;
    public $updated_at;

    public function mount($slug, $uuid)
    {
        $regle = Regle::where('slug', $slug)->where('uuid', $uuid)->first();

        if ($regle) {
            $this->title = $regle->title;
            $this->updated_at  = $regle->updated_at->format('d M Y');
            $this->body  = $regle->html;
        }
    }

    public function render()
    {
        return view('livewire.regles');
    }
}
