<?php

namespace App\Livewire;

use App\Models\Etab;
use Livewire\Component;
use Livewire\WithPagination;

class Etablissements extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 30;

    public function render()
    {
        return view('livewire.etablissement.index', [

            'etabs'  => Etab::where('status', true)->where('rubrique_id', '!=', 5)
            ->orderBy('id', 'asc')->paginate($this->page),

            'doctorales'  => Etab::where('status', true)->where('rubrique_id', 5)
            ->orderBy('id', 'asc')->paginate($this->page),
        ]);
    }
}
