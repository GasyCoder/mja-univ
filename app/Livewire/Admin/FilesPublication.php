<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Revue;
use App\Models\Volume;
use Livewire\Component;
use App\Models\Publication;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FilesPublication extends Component
{
    use WithFileUploads, WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $page = 10;
    public $file_path;
    public $original_name;
    public $size;
    public $revue_id;
    public $annee_id;
    public $volume_id;
    public $startPage, $endPage;
    public $issn;
    public $is_active = true;
    public $openTrash = false;
    public $fileData;
    public $pubId;

    public function save()
    {
        $this->validate([
            'file_path' => 'required|file',
        ]);


        $filename = time() . '.' . $this->file_path->getClientOriginalExtension();
        $file = $this->file_path->store('publications', 'public', $filename);

        Publication::create([
            'file_path'  => $file,
            'original_name' => $filename,
            'revue_id'   => $this->revue_id,
            'annee_id'   => $this->annee_id,
            'volume_id'  => $this->volume_id,
            'startPage'  => $this->startPage,
            'endPage'    => $this->endPage,
            'issn'       =>  $this->issn,
            'size'       => $this->file_path->getSize(),
            'extension'  => $this->file_path->getClientOriginalExtension(),
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Fichier ajouté avec succèss!');
        return $this->redirect('/adminx/fichiers', navigate: false);
    }

    public function edit($id)
    {
        $edit = Publication::findOrFail($id);
        $this->pubId  = $id;

        $this->fileData = $edit->file_path;
        $this->original_name = $edit->original_name;
        $this->revue_id = $edit->revue_id;
        $this->annee_id = $edit->annee_id;
        $this->volume_id = $edit->volume_id;
        $this->issn = $edit->issn;
        $this->startPage = $edit->startPage;
        $this->endPage = $edit->endPage;
        $this->is_active = $edit->is_active ? true : false;
    }

    public function update()
    {
        // $this->validate([
        //     'file_path' => 'sometimes|file',
        // ]);

        $update = Publication::findOrFail($this->pubId);
        $updateData = [
            'revue_id'   => $this->revue_id,
            'annee_id'   => $this->annee_id,
            'volume_id'  => $this->volume_id,
            'startPage'  => $this->startPage,
            'endPage'    => $this->endPage,
            'issn'       =>  $this->issn,
            'is_active'  => $this->is_active ? true : false,
        ];

        if ($this->file_path) {
            $filename = time() . '.' . $this->file_path->getClientOriginalExtension();
            $updateData['file_path'] = $this->file_path->store('publications', 'public', $filename);
            $updateData['original_name'] = $filename;
            $updateData['size'] = $this->file_path->getSize();
            $updateData['extension'] = $this->file_path->getClientOriginalExtension();
        }

        $update->update($updateData);

        $this->reset();
        $this->showMessage('Fichier mise à jour avec succèss!');
        return $this->redirect('/adminx/fichiers', navigate: false);
    }





    public function delete($id)
    {
        $file = Publication::findOrFail($id);

        $file->delete();

        $this->showMessage('Fichier en corbeille !');
    }

    public function restore($id)
    {
        $file = Publication::onlyTrashed()->findOrFail($id);

        $file->restore();

        $this->showMessage('Fichier a été restauré!');
    }

    public function forceDelete($id)
    {
        $file = Publication::onlyTrashed()->findOrFail($id);

        $file->forceDelete();

        $this->showMessage('Fichier a été supprimé définitivement!');
    }


    public function trash()
    {
        $this->openTrash = true;
    }

    public function cancel()
    {
        $this->openTrash = false;
    }

    public function render()
    {
        return view('livewire.admin.publications.files.index', [
            'files'  => Publication::latest()->paginate($this->page),
            'allFiles' => Publication::where('is_active', true)->count(),
            'trashes'       => Publication::onlyTrashed()->latest()->paginate($this->page),
            'trasheCount'   => Publication::onlyTrashed()->count(),
            'revues'  => Revue::where('is_active', true)->get(),
            'annees'  => Annee::where('is_active', true)->get(),
            'volumes'  => Volume::where('is_active', true)->get(),
        ]);
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

