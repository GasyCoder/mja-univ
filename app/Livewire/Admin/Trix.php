<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Trix extends Component
{

    public $value;
    public $trixId;

    public function mount($value = '')
    {
        $this->value = $value;
        $this->trixId = 'trix-' . uniqid();
    }


}
