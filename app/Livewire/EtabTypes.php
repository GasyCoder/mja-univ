<?php

namespace App\Livewire;

use App\Models\Etab;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class EtabTypes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 30;
    public $typeId;
    public $name;

    public function mount($slug)
    {
        $type = Type::where('slug', $slug)->first();
        $this->name = $type->name;
        $this->typeId = $type->id;
    }

    public function render()
    {
        $etabs = Etab::where('type_id', $this->typeId)->where('status', true)->paginate($this->page);
        $counts = Etab::where('type_id', $this->typeId)->where('status', true)->count();

        return view('livewire.etablissement.types.index', [
            'etabs' => $etabs,
            'counts'  => $counts
        ]);
    }
}
