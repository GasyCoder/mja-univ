<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Type;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Types extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required')]
    public $name;
    public $is_active;
    public $page = 10;
    public $typeId;

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

        Type::create([
            'name'             => $this->name,
            'is_active'         => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Type ajouté!');
        return $this->redirect('/adminx/type-etab', navigate: false);
    }

    public function edit($id)
    {
        $edit = Type::findOrFail($id);
        $this->typeId           = $id;
        $this->name            = $edit->name;
        $this->is_active        = $edit->is_active ? true : false;
    }

    public function update()
    {
        $this->validate();

        $update =  Type::findOrFail($this->typeId);
        $update->update([
            'name'       => $this->name,
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->showMessage('Type a été à jour!');
        $this->redirect('/adminx/type-etab');
    }

    public function delete($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        $this->showMessage('Type a été supprimé!');
    }

    public function render()
    {
        return view('livewire.admin.etabs.types.index', [

            'types' => Type::orderBy('id', 'asc')->paginate($this->page),
        ]);
    }
}
