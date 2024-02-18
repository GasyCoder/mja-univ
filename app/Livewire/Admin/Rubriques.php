<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Rubrique;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Rubriques extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required')]
    public $name;
    public $is_active;
    public $page = 10;
    public $rubriqueId;

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

        Rubrique::create([
            'name'             => $this->name,
            'is_active'         => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Rubrique ajouté!');
        return $this->redirect('/adminx/rubrique-etab', navigate: false);
    }

    public function edit($id)
    {

        $edit = Rubrique::findOrFail($id);
        $this->rubriqueId           = $id;
        $this->name                 = $edit->name;
        $this->is_active            = $edit->is_active ? true : false;
    }

    public function update()
    {
        $this->validate();

        $update =  Rubrique::findOrFail($this->rubriqueId);
        $update->update([
            'name'       => $this->name,
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->showMessage('Rubrique a été à jour!');
        $this->redirect('/adminx/rubrique-etab');
    }

    public function delete($id)
    {
        $rubrique = Rubrique::findOrFail($id);
        $rubrique->delete();

        $this->showMessage('Rubrique a été supprimé!');
    }

    public function render()
    {
        return view('livewire.admin.etabs.rubrique.index', [

            'rubriques' => Rubrique::latest()->paginate($this->page),
        ]);
    }
}
