<?php

namespace App\Livewire;

use App\Models\Domaine;
use Livewire\Component;
use Livewire\WithPagination;

class Offres extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 10;

    public function render()
    {
        return view('livewire.domaine.offres', [
            'offres' => Domaine::where('is_active', true)->latest()->paginate($this->page),
        ]);
    }
}
