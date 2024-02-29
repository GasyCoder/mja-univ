<?php

namespace App\Livewire;

use App\Models\Preinscrit;
use Livewire\Component;
use Livewire\WithPagination;

class PreinscriptionPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 20;

    public function render()
    {
        return view('livewire.pages.pre-inscription', [
            'resultats'  => Preinscrit::where('is_active', true)->latest()->paginate($this->page),

            'yearUniv'  => Preinscrit::where('is_active', true)->first(),
        ]);
    }
}
