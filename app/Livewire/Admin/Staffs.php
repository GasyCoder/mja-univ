<?php

namespace App\Livewire\Admin;

use App\Models\Staff;
use Livewire\Component;
use App\Models\StaffCat;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Staffs extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    #[Validate('nullable|image|max:2120')]
    public $image_path;

    #[Validate('required')]
    public $name;
    public $staff_cat_id;
    public $job;
    public $matricule;
    public $about;
    public $is_active = true;
    public $page = 10;
    public $cat = false;
    public $title;
    public $catId, $staffId;
    public $dbImage;

    public function AddCat()
    {
        $this->cat = true;
    }
    public function cancel()
    {
        $this->cat = false;
    }

    public function render()
    {
        return view('livewire.admin.universite.staff', [

            'staffs'  => Staff::latest()->paginate($this->page),
            'catstaffs'  => StaffCat::where('is_active', true)->get(),
            'categories' => StaffCat::latest()->paginate($this->page)
        ]);
    }

    // Staff
    public function save()
    {
        $this->validate();

        $image_path = $this->image_path ? $this->image_path->store('staff', 'public') : null;

        Staff::create([
            'name'             => $this->name,
            'staff_cat_id'     => $this->staff_cat_id,
            'job'              => $this->job,
            'matricule'        => $this->matricule,
            'about'            => $this->about,
            'is_active'        => $this->is_active ? true : false,

            'image_path'       => $image_path,
        ]);

        $this->reset();
        $this->showMessage('Ajouté avec succèss!');
        return $this->redirect('/adminx/staff', navigate: false);
    }

    public function edit($id)
    {

        $edit = Staff::findOrFail($id);
        $this->staffId                  = $id;
        $this->name                     = $edit->name;
        $this->staff_cat_id             = $edit->staff_cat_id;
        $this->job                      = $edit->job;
        $this->matricule                = $edit->matricule;
        $this->about                    = $edit->about;
        $this->is_active                = $edit->is_active ? true : false;

        $this->dbImage                  = $edit->image_path;
    }

    public function update()
    {
        $this->validate();

        $update =  Staff::findOrFail($this->staffId);

        $updateData = [
            'name'             => $this->name,
            'staff_cat_id'     => $this->staff_cat_id,
            'job'              => $this->job,
            'matricule'        => $this->matricule,
            'about'            => $this->about,
            'is_active'        => $this->is_active ? true : false,
        ];

        if ($this->image_path) {
            $updateData['image_path'] = $this->image_path->store('staff', 'public');
        }

        $update->update($updateData);
        $this->showMessage('Ajouté avec succèss!');
        return $this->redirect('/adminx/staff', navigate: false);
    }



    // Staff Catégories

    public function saveCat()
    {
        //$this->validate();

        StaffCat::create([
            'title'             => $this->title,
            'is_active'         => $this->is_active ? true : false,
        ]);

        $this->reset();
        return $this->redirect('/adminx/staff', navigate: false);
        $this->showMessage('Ajouté avec succèss!');
    }

    public function editCat($id)
    {

        $edit = StaffCat::findOrFail($id);
        $this->catId        = $id;
        $this->title         = $edit->title;
        $this->is_active    = $edit->is_active ? true : false;
    }

    public function updateCat()
    {
        //$this->validate();
        $update =  StaffCat::findOrFail($this->catId);
        $update->update([
            'title'       => $this->title,
            'is_active'   => $this->is_active ? true : false,
        ]);

        $this->showMessage('Catégorie a été à jour!');
        $this->redirect('/adminx/staff');
    }

    public function deleteCat($id)
    {
        $category = StaffCat::findOrFail($id);
        $category->delete();

        $this->showMessage('Catégorie a été supprimé!');
    }

    public function showMessage($message)
    {
        $this->alert('success', $message, [
            'toast' => true,
            'icon' => 'success',
            'timer' => 3000,
            'timerProgressBar' => true,
            'onClose' => 'refresh',
            'message' => $message
        ]);
    }
}
