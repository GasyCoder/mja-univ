<?php

namespace App\Livewire\Admin;

use App\Models\Etab;
use Livewire\Component;
use App\Models\Preinscrit;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Preinscrits extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 20;
    public $year_univ = '2023-2024';
    public $etab_id;
    public $url_file;
    public $is_active = true;
    public $resultId;
    public $openTrash = false;

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
            'year_univ' => 'required',
            'etab_id' => 'required',
        ]);

        Preinscrit::create([
            'year_univ'       => $this->year_univ,
            'url_file'        => $this->url_file,
            'etab_id'         => $this->etab_id,
            'is_active'       => $this->is_active ? true : false,
        ]);

        $this->showMessage('Rsultats a été ajouté!');
        return $this->redirect('/adminx/pre-inscription', navigate: false);
    }

    public function edit($id)
    {
        $edit = Preinscrit::findOrFail($id);

        $this->resultId     = $id;
        $this->year_univ    = $edit->year_univ;
        $this->url_file     = $edit->url_file;
        $this->etab_id      = $edit->etab_id;
        $this->is_active    = $edit->is_active ? true : false;
    }

    public function update()
    {
        $this->validate([
            'year_univ' => 'required',
            'etab_id' => 'required',
        ]);

        $update = Preinscrit::findOrFail($this->resultId);
        $updateData = [
            'year_univ'       => $this->year_univ,
            'url_file'        => $this->url_file,
            'etab_id'         => $this->etab_id,
            'is_active'       => $this->is_active ? true : false,
        ];
        $update->update($updateData);
        $this->showMessage('Mise à jour a été avec ssucès!');
        return $this->redirect('/adminx/pre-inscription', navigate: false);
    }

    public function delete($id)
    {
        $resultat = Preinscrit::findOrFail($id);
        $resultat->delete();

        $this->showMessage('Résultat en corbeille!');
    }

    public function trash()
    {
        $this->openTrash = true;
    }

    public function cancel()
    {
        $this->openTrash = false;
    }

    public function restore($id)
    {
        $result = Preinscrit::onlyTrashed()->findOrFail($id);

        $result->restore();

        $this->showMessage('Résultat a été restauré!');
    }

    public function forceDelete($id)
    {
        $result = Preinscrit::onlyTrashed()->findOrFail($id);

        $result->forceDelete();

        $this->showMessage('Résultat a été supprimé définitivement!');
    }

    public function render()
    {
        return view('livewire.admin.preinscription.index', [

            'resultats' => Preinscrit::latest()->paginate($this->page),
            'allResultats' => Preinscrit::count(),

            'trashes'   => Preinscrit::onlyTrashed()->latest()->paginate($this->page),
            'trasheCount' => Preinscrit::onlyTrashed()->count(),

            'etabs'     => Etab::where('type_id', '!=', 5)->where('status', true)->get(),

        ]);
    }
}
