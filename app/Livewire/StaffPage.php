<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use App\Models\StaffCat;


class StaffPage extends Component
{
    public $image_path;

    public $name;
    public $about;
    public $is_active;

    public function mount()
    {
        $staff = Staff::first();

        if ($staff) {
            $this->name = $staff->name;
            $this->about = $staff->about;
            $this->image_path = $staff->image_path;
        } else {
            // Définir des valeurs par défaut ou gérer l'absence de Staff
            $this->name = null;
            $this->about = null;
            $this->image_path = null;
        }
    }



    public function render()
    {
        $staffCats = StaffCat::where('is_active', true)->with('staffs')->get();
        return view('livewire.university.staff', [
            'staffCats' => $staffCats
        ]);
    }
}
