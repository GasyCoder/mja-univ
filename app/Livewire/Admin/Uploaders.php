<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Uploader;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Uploaders extends Component
{
    use WithFileUploads, WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

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

    public $page = 10;
    public $file_name;
    public $original_name;
    public $file_path;
    public $file_url;
    public $thumbnail;
    public $size;
    public $docId;
    public $is_active = true;
    public $openTrash, $type_file = false;

    public function TypeFile()
    {
        //dd($this->type_file);
        $this->type_file = $this->type_file;
    }

    public function save()
    {
        $this->validate([
            'original_name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:1024',
        ]);

        if ($this->type_file == false) {
            $filename = time() . '.' . $this->file_path->getClientOriginalExtension();
            $this->file_path->storeAs('public/documents', $filename);

            $document = new Uploader;
            $document->file_name = $filename;
            $document->original_name = $this->original_name;
            $document->file_path = 'public/documents/' . $filename;
            $document->size = $this->file_path->getSize();
            $document->extension = $this->file_path->getClientOriginalExtension();
            $document->is_active = $this->is_active ? true : false;
            $document->thumbnail = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : null;
            // if ($this->thumbnail) {
            //     $thumbnailName = time() . '.' . $this->thumbnail->getClientOriginalExtension();
            //     $this->thumbnail->storeAs('public/thumbnails', $thumbnailName);
            //     $document->thumbnail = 'public/thumbnails/' . $thumbnailName;
            // }

            $document->save();

        } else {
            $document = new Uploader;
            $document->file_name = $this->file_name;
            $document->original_name = $this->file_name;
            $document->file_path = $this->file_url;
            $document->extension = pathinfo($this->file_url, PATHINFO_EXTENSION);
            $document->is_active = $this->is_active ? true : false;

            $document->thumbnail = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : null;

            $document->save();
        }

        $this->reset();
        $this->showMessage('Fichier ajouté avec succèss!');
        return $this->redirect('/adminx/uploader', navigate: false);
    }

    public function edit($id)
    {
        $edit = Uploader::findOrFail($id);

        $this->docId            = $id;
        $this->file_name        = $edit->file_name;
        $this->original_name    = $edit->original_name;
        $this->file_path        = $edit->file_path;
        $this->file_url         = $edit->file_url;
        $this->thumbnail        = $edit->thumbnail;
        $this->size             = $edit->size;
        $this->is_active        = $edit->is_active  ? true : false;
        $this->type_file        = $edit->type_file  ? true : false;
    }

    public function update()
    {
        // Valider les données
        $this->validate([
            'original_name' => 'required|string|max:255',
        ]);

        // Trouver le document à mettre à jour
        $document = Uploader::findOrFail($this->docId);

        if ($this->type_file == false) {
            // Si un nouveau fichier a été téléchargé, le stocker et mettre à jour le chemin du fichier
            if ($this->file_path instanceof UploadedFile) {
                $filename = time() . '.' . $this->file_path->getClientOriginalExtension();
                $this->file_path->storeAs('public/documents', $filename);
                $document->file_path = 'public/documents/' . $filename;
                $document->size = $this->file_path->getSize();
                $document->extension = $this->file_path->getClientOriginalExtension();
            }
        } else {
            // Si une nouvelle URL a été fournie, la mettre à jour
            if ($this->file_url) {
                $document->file_path = $this->file_url;
                $document->extension = pathinfo($this->file_url, PATHINFO_EXTENSION);
            }
        }

        // Si une nouvelle miniature a été téléchargée, la stocker et mettre à jour le chemin de la miniature
        if ($this->thumbnail instanceof UploadedFile) {
            $thumbnailPath = $this->thumbnail->store('thumbnails', 'public');
            $document->thumbnail = $thumbnailPath;
        }

        // Mettre à jour les autres propriétés du document
        $document->file_name = $this->file_name;
        $document->original_name = $this->original_name;
        $document->is_active = $this->is_active ? true : false;

        // Enregistrer le document
        $document->save();

        // Réinitialiser les propriétés du composant
        $this->reset();
        $this->showMessage('Document mis à jour avec succès.');
        return $this->redirect('/adminx/uploader', navigate: false);
    }


    public function delete($id)
    {
        $file = Uploader::findOrFail($id);

        $file->delete();

        $this->showMessage('Fichier en corbeille !');
    }

    public function restore($id)
    {
        $file = Uploader::onlyTrashed()->findOrFail($id);

        $file->restore();

        $this->showMessage('Fichier a été restauré!');
    }

    public function forceDelete($id)
    {
        $file = Uploader::onlyTrashed()->findOrFail($id);

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
        return view('livewire.admin.upload.index', [

            'files'  => Uploader::latest()->paginate($this->page),
            'allFiles' => Uploader::where('is_active', true)->count(),

            'trashes'       => Uploader::onlyTrashed()->latest()->paginate($this->page),
            'trasheCount'   => Uploader::onlyTrashed()->count(),
        ]);
    }
}
