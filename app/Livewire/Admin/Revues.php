<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Revue;
use App\Models\Volume;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Revues extends Component
{
    use WithFileUploads, LivewireAlert,WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('image|max:2120')]
    public $logo;

    public $page = 10;
    public $sigle;
    public $sub_title;
    public $annee;
    public $volumeName;
    public $is_active = true;
    public $revueId, $anneeId, $volumeId;
    public $logoCurrent;


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

    // Revue
    public function saveRevue()
    {
        $logoRevue = $this->logo ? $this->logo->store('revues', 'public') : null;
        Revue::create([
          'sigle'               =>  $this->sigle,
          'sub_title'           => $this->sub_title,
          'is_active'           => $this->is_active ? true : false,
          'logo'                => $logoRevue,
        ]);

        $this->reset();
        $this->showMessage('Ajouté avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }

    public function editRevue($id)
    {
        $edit_r = Revue::findOrFail($id);
        $this->revueId      = $id;
        $this->sigle        = $edit_r->sigle;
        $this->sub_title    = $edit_r->sub_title;
        $this->is_active    = $edit_r->is_active ? true : false;

        $this->logoCurrent  = $edit_r->logo;
    }

    public function updateRevue()
    {
        $update = Revue::findOrFail($this->revueId);
        $updateData = [
            'sigle'         => $this->sigle,
            'sub_title'     => $this->sub_title,
            'is_active'     => $this->is_active ? true : false,
        ];
        if ($this->logo) {
            $updateData['logo'] = $this->logo->store('revues', 'public');
        }
        $update->update($updateData);
        $this->reset();
        $this->showMessage('Mise à jour avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }


    // Annee
    public function saveAnnee()
    {
        Annee::create([
            'annee' =>  $this->annee,
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Ajouté avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }

    public function editAnnee($id)
    {
        $edit_a = Annee::findOrFail($id);
        $this->anneeId = $id;
        $this->annee   = $edit_a->annee;
        $this->is_active = $edit_a->is_active ? true : false;

    }

    public function updateAnnee()
    {
        $update = Annee::findOrFail($this->anneeId);
        $updateData = [
            'annee' =>  $this->annee,
            'is_active'  => $this->is_active ? true : false,
        ];
        $update->update($updateData);
        $this->reset();
        $this->showMessage('Mise à jour avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }

    // Volume
    public function saveVolume()
    {
        Volume::create([
            'volumeName' =>  $this->volumeName,
            'is_active'  => $this->is_active ? true : false,
        ]);

        $this->reset();
        $this->showMessage('Ajouté avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }

    public function editVolume($id)
    {
        $edit_v = Volume::findOrFail($id);
        $this->volumeId = $id;
        $this->volumeName   = $edit_v->volumeName;
        $this->is_active = $edit_v->is_active ? true : false;
    }

    public function updateVolume()
    {
        $update = Volume::findOrFail($this->volumeId);
        $updateData = [
            'volumeName' =>  $this->volumeName,
            'is_active'  => $this->is_active ? true : false,
        ];
        $update->update($updateData);
        $this->reset();
        $this->showMessage('Mise à jour avec succes!');
        return $this->redirect('/adminx/revues', navigate: false);
    }

    public function deleteRevue($id)
    {
        $deleteRevue = Revue::findOrFail($id);
        $deleteRevue->delete();

        $this->showMessage('Supprimé avec succes!');
    }

    public function render()
    {
        return view('livewire.admin.publications.revues.index', [

            'revues'  => Revue::latest()->paginate($this->page),
            'annees'  => Annee::latest()->paginate($this->page),
            'volumes'  => Volume::latest()->paginate($this->page),
        ]);
    }
}
