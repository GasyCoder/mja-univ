<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Categories extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required')]
    public $name;
    public $is_active;
    public $page = 10;
    public $catId;

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

    public function save()
    {
        $this->validate();

        Category::create([
            'name'             => $this->name,
            'is_active'         => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Catégorie ajouté!');
        return $this->redirect('/adminx/categorie', navigate: false);
    }

    public function edit($id){

        $edit = Category::findOrFail($id);
        $this->catId        = $id;
        $this->name         = $edit->name;
        $this->is_active    = $edit->is_active ? true : false;
    }

    public function update()
    {
        $this->validate();

        $update =  Category::findOrFail($this->catId);
        $update->update([
            'name'       => $this->name,
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->showMessage('Catégorie a été à jour!');
        $this->redirect('/adminx/categorie');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();

        $this->showMessage('Catégorie a été supprimé!');
    }

    public function render()
    {
        return view('livewire.admin.category.index', [

            'categories' => Category::latest()->paginate($this->page),
        ]);
    }
}
