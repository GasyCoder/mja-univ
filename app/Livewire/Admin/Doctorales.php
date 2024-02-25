<?php

namespace App\Livewire\Admin;

use App\Models\Etab;
use App\Models\ContactEtab;
use Livewire\Component;
use App\Models\Type;
use App\Models\Pedagogie;
use App\Models\Statistic;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Doctorales extends Component
{
    use AuthorizesRequests, LivewireAlert, WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    #[Validate('nullable|image|max:2120')]
    public $image_path;

    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $sigle;
    #[Validate('required')]
    public $type_id;
    public $director;
    public $logoCurrent;

    public $slogan;
    public $about;
    public $status = true;
    public $page = 10;

    public $doc_Id, $state_Id, $contact_Id;

    public $openTrash = false;

    public $enseignant, $etudiant, $personnel, $vacataire;
    public $phone_1, $phone_2, $email, $siteweb, $facebook, $adresse;

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

    // Etablissement
    public function save()
    {
        //$this->validate();
        $image_path = $this->image_path ? $this->image_path->store('doctorale', 'public') : null;
        $doctorale = Etab::create([
            'name'                      => $this->name,
            'sigle'                     => $this->sigle,
            'type_id'                   => $this->type_id,
            'director'                  => $this->director,
            'slogan'                    => $this->slogan,
            'about'                     => $this->about,
            'status'                    => $this->status ? true : false,
            'image_path'                => $image_path,
        ]);

        Statistic::firstOrCreate(['etabId' => $doctorale->id]);
        ContactEtab::firstOrCreate(['etabId' => $doctorale->id]);

        $this->reset();
        $this->showMessage('Ecole Doctorale ajouté!');
        return $this->redirect('/adminx/doctorale-ecole', navigate: false);
    }

    public function edit($id)
    {
        $edit = Etab::findOrFail($id);
        $this->doc_Id               = $id;
        $this->name                 = $edit->name;
        $this->sigle                = $edit->sigle;
        $this->type_id              = $edit->type_id;
        $this->director             = $edit->director;
        $this->slogan               = $edit->slogan;
        $this->about                = $edit->about;
        $this->status               = $edit->status ? true : false;

        $this->logoCurrent          = $edit->image_path;
    }

    public function update()
    {
        $update = Etab::findOrFail($this->doc_Id);
        $updateData = [
            'name'                      => $this->name,
            'sigle'                     => $this->sigle,
            'type_id'                   => $this->type_id,
            'director'                  => $this->director,
            'slogan'                    => $this->slogan,
            'about'                     => $this->about,
            'status'                    => $this->status ? true : false,
        ];

        if ($this->image_path) {
            $updateData['image_path'] = $this->image_path->store('doctorale', 'public');
        }

        $update->update($updateData);
        $this->showMessage('Ecole doctorale à jour avec succès!');
        return $this->redirect('/adminx/doctorale-ecole', navigate: false);
    }

    // Statistique
    public function state($id)
    {
        Etab::find($id);
        $this->state_Id = $id;
    }

    public function updateState()
    {
        $update = Statistic::findOrFail($this->state_Id);

        $updateData = [
            'enseignant'    => $this->enseignant,
            'etudiant'      => $this->etudiant,
            'personnel'     => $this->personnel,
            'vacataire'     => $this->vacataire,
        ];

        $update->update($updateData);

        $this->showMessage('Statistique mise à jour avec succès!');
        return $this->redirect('/adminx/doctorale-ecole', navigate: false);
    }


    public function succesState($id)
    {
        $state = Statistic::find($id);
        $this->state_Id         = $id;
        $this->enseignant       = $state->enseignant;
        $this->etudiant         = $state->etudiant;
        $this->personnel        = $state->personnel;
        $this->vacataire        = $state->vacataire;
    }

    // Contact

    public function contact($id)
    {
        Etab::find($id);
        $this->contact_Id = $id;
    }

    public function submitContact()
    {
        $update = ContactEtab::findOrFail($this->contact_Id);

        $updateData = [
            'phone_1'       => $this->phone_1,
            'phone_2'       => $this->phone_2,
            'email'         => $this->email,
            'siteweb'       => $this->siteweb,
            'facebook'      => $this->facebook,
            'adresse'       => $this->adresse

        ];
        $update->update($updateData);
        $this->showMessage('Contact avec succès!');
        return $this->redirect('/adminx/doctorale-ecole', navigate: false);
    }

    public function succesContact($id)
    {
        $contact = ContactEtab::find($id);
        $this->contact_Id           = $id;
        $this->phone_1              = $contact->phone_1;
        $this->phone_2              = $contact->phone_2;
        $this->email                = $contact->email;
        $this->siteweb              = $contact->siteweb;
        $this->facebook             = $contact->facebook;
        $this->adresse              = $contact->adresse;
    }

    public function delete($id)
    {
        $doctorale = Etab::findOrFail($id);
        // Detach all related domaines
        $doctorale->domaines()->detach();
        $doctorale->statistiques()->delete();
        $doctorale->contact()->delete();
        $doctorale->delete();

        $this->showMessage('Ecole doctorale a été supprimé!');
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
        $doctorale = Etab::onlyTrashed()->findOrFail($id);

        $doctorale->restore();

        $this->showMessage('Ecole doctorale a été restauré!');
    }

    public function forceDelete($id)
    {
        $doctorale = Etab::onlyTrashed()->findOrFail($id);

        $doctorale->forceDelete();

        $this->showMessage('Ecole doctorale a été supprimé définitivement!');
    }


    public function render()
    {
        return view('livewire.admin.etabs.doctorale.listes', [

            'doctorales' => Etab::where('type_id', 5)->latest()->paginate($this->page),

            'archives' => Etab::onlyTrashed()->latest()->paginate($this->page),
            'archivesCount' => Etab::onlyTrashed()->count(),

            'types' => Type::where('id', 5)->where('is_active', true)->get(),

        ]);
    }
}
