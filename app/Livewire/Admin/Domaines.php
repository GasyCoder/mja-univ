<?php

namespace App\Livewire\Admin;

use App\Models\Etab;
use App\Models\Domaine;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Domaines extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('nullable|image|max:2120')]
    public $icon_path;

    public $page = 10;
    public $name;
    public $uuid;
    public $slug;
    public $etab_id = [];
    public $resume;
    public $is_active = true;
    public $domaineId, $iconCurrent;

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
        $this->validate([
            'name' => 'required',
            // 'etab_id' => 'required|array',
            // 'etab_id.*' => 'exists:etabs,id',
            'resume' => 'nullable',
        ]);

        $icon_path = $this->icon_path ? $this->icon_path->store('domaines', 'public') : null;


        $domaine = Domaine::create([
            'name'              => $this->name,
            'resume'            => $this->resume,
            'is_active'         => $this->is_active ? true : false,

            'icon_path'         => $icon_path,
        ]);

        ///$domaine->etabs()->sync($this->etab_id);

        $this->showMessage('Domaine ajouté!');
        return $this->redirect('/adminx/domaines', navigate: false);
    }

    public function edit($id)
    {
        $edit = Domaine::findOrFail($id);

        $this->domaineId = $id;
        $this->name = $edit->name;
        $this->resume = $edit->resume;
        $this->is_active  = $edit->is_active ? true : false;
        $this->iconCurrent  = $edit->icon_path;

        //$this->etab_id = $edit->etabs->pluck('id')->toArray();

        //$edit->etabs()->sync($this->etab_id);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            // 'etab_id' => 'required|array',
            // 'etab_id.*' => 'exists:etabs,id',
            'resume' => 'nullable',
        ]);

        $update = Domaine::findOrFail($this->domaineId);

        $updateData = [
            'name'              => $this->name,
            'resume'            => $this->resume,
            'is_active'         => $this->is_active ? true : false,
        ];

        if ($this->icon_path) {
            $updateData['icon_path'] = $this->icon_path->store('domaines', 'public');
        }

        //$update->etabs()->sync($this->etab_id);
        $update->update($updateData);
        $this->showMessage('Domaine mis à jour!');
        return $this->redirect('/adminx/domaines', navigate: false);
    }


    public function delete($id)
    {
        $domaine = Domaine::findOrFail($id);
        //$domaine->etabs()->detach(); // Detach all related etabs
        $domaine->delete();

        $this->showMessage('Domaine a été supprimé!');
    }



    public function render()
    {
        return view('livewire.admin.domaines.index', [
            'domaines'  => Domaine::latest()->paginate($this->page),
            'etabs'  => Etab::where('status', true)->get()
        ]);
    }
}
