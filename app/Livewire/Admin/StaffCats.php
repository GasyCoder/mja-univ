<?php

namespace App\Livewire\Admin;

use App\Models\StaffCat;
use Livewire\Component;

class StaffCats extends Component
{
    public $page = 10;

    public function render()
    {
        return view('livewire.admin.staff.cates.index', [

            'categories' => StaffCat::latest()->paginate($this->page)
        ]);
    }
}
