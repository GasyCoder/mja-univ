<?php

namespace App\Livewire;

use App\Models\Evenement;
use Livewire\Component;

class SingleEvent extends Component
{
    public $image_cover;

    public $title;
    public $sub_title;
    public $description;
    public $organisator;
    public $location;
    public $url_location;
    public $dateStart;
    public $dateEnd;
    public $hourStart;
    public $hourEnd;
    public $file_path;

    public function mount($uuid)
    {
        $event = Evenement::where('uuid', $uuid)->firstOrFail();

        $this->title            = $event->title;
        $this->sub_title        = $event->sub_title;
        $this->description      = $event->description;
        $this->organisator      = $event->organisator;
        $this->location         = $event->location;
        $this->url_location     = $event->url_location;
        $this->dateStart        = $event->dateStart;
        $this->dateEnd          = $event->dateEnd;
        $this->hourStart        = $event->hourStart;
        $this->hourEnd          = $event->hourEnd;

        $this->image_cover      = $event->image_cover;
        $this->file_path        = $event->file_path;

    }

    public function render()
    {
        return view('livewire.evenements.single-event', [
            'evenement'  => Evenement::count(),
        ]);
    }
}
