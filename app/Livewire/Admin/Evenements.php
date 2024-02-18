<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Evenement;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Evenements extends Component
{
    use AuthorizesRequests, LivewireAlert, WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $page = 10;
    public $addForm, $updateForm = false;

    #[Validate('nullable|image|max:2120')]
    public $image_cover;

    public $title;
    public $sub_title;
    public $description;
    public $organisator;
    public $location;
    public $url_location;
    public $dateStart;
    public $dateEnd;
    public $hourStart;
    public $hourEnd;
    public $file_path;
    public $is_active;
    public $is_archive;
    public $currentImage, $dbFile;
    public $eventId;

    public function addEvent()
    {
        $this->addForm = true;
    }


    public function save()
    {
        $this->validate();

        $image_path = $this->image_cover ? $this->image_cover->store('events', 'public') : null;
        $file_doc = $this->file_path ? $this->file_path->store('events_files', 'public') : null;

        Evenement::create([
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'organisator' => $this->organisator,
            'location' => $this->location,
            'url_location' => $this->url_location,
            'dateStart' => $this->dateStart,
            'dateEnd' => $this->dateEnd,
            'hourStart' => $this->hourStart,
            'hourEnd' => $this->hourEnd,
            'is_active' => $this->is_active ? true : false,
            'is_archive' => $this->is_archive ? true : false,

            'file_path'         => $file_doc,
            'image_cover'       => $image_path,
        ]);

        $this->reset();
        $this->showMessage('Evenement ajouté avec succèss!');
        return $this->redirect('/adminx/event', navigate: false);
    }

    public function edit($id)
    {
        $edit = Evenement::findOrFail($id);
        $this->eventId = $id;
        $this->title = $edit->title;
        $this->sub_title = $edit->sub_title;
        $this->description = $edit->description;
        $this->organisator = $edit->organisator;
        $this->location = $edit->location;
        $this->url_location = $edit->url_location;
        $this->dateStart = $edit->dateStart;
        $this->dateEnd = $edit->dateEnd;
        $this->hourStart = $edit->hourStart;
        $this->hourEnd = $edit->hourEnd;

        $this->currentImage = $edit->image_cover;
        $this->dbFile       = $edit->file_path;

        $this->is_active = $edit->is_active;
        $this->is_archive = $edit->is_archive;

        $this->updateForm           = true;
    }


    public function update()
    {
        $this->validate();

        $update = Evenement::find($this->eventId);

        $updateData = [
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'organisator' => $this->organisator,
            'location' => $this->location,
            'url_location' => $this->url_location,
            'dateStart' => $this->dateStart,
            'dateEnd' => $this->dateEnd,
            'hourStart' => $this->hourStart,
            'hourEnd' => $this->hourEnd,
            'is_active' => $this->is_active ? true : false,
            'is_archive' => $this->is_archive ? true : false,

        ];
        if ($this->image_cover) {
            $updateData['image_cover'] = $this->image_cover->store('events', 'public');
        }
        if ($this->file_path) {
            $updateData['file_path'] = $this->file_path->store('events_files', 'public');
        }

        $update->update($updateData);
        $this->reset();
        $this->showMessage('Evenement mise à jour succèss!');
        return $this->redirect('/adminx/event', navigate: false);
    }

    public function active($id)
    {
        $active = Evenement::findOrFail($id);
        $active->update([
            'is_active'   => false,
        ]);
        $this->showMessage('Evenement désactivé');
    }

    public function desactive($id)
    {
        $desactive = Evenement::findOrFail($id);
        $desactive->update([
            'is_active'  => true,
        ]);
        $this->showMessage('Evenement activé');
    }


    public function archiveActif($id)
    {
        $active = Evenement::findOrFail($id);
        $active->update([
            'is_archive'   => false,
        ]);
        $this->showMessage('Evenement Désacrchivé');
    }

    public function archiveDesactif($id)
    {
        $desactive = Evenement::findOrFail($id);
        $desactive->update([
            'is_archive'  => true,
        ]);
        $this->showMessage('Evenement  Archivé');
    }

    public function delete($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();

        session()->flash('message', 'Evenement successfully deleted.');
    }


    public function render()
    {
        return view('livewire.admin.events.index', [

            'events' => Evenement::latest()->paginate($this->page),
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

    public function cancelAdd()
    {
        $this->addForm = false;
    }

    public function cancelUpdate()
    {
        $this->updateForm = false;
    }
}
