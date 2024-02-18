<?php

namespace App\Livewire\Admin;

use App\Models\Etab;
use App\Models\ContactEtab;
use Livewire\Component;
use App\Models\Rubrique;
use App\Models\Pedagogie;
use App\Models\Statistic;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Etabs extends Component
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
    public $rubrique_id;
    #[Validate('required')]
    public $director;
    public $logoCurrent;

    public $slogan;
    public $about;
    public $status = true;
    public $page = 10;

    public $etab_Id, $pedago_Id, $state_Id, $contact_Id;

    public $domaine, $mention, $parcour = [];
    public $respo_mention, $respo_parcour;
    public $pedagogie, $openTrash = false;

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
        $image_path = $this->image_path ? $this->image_path->store('etabs', 'public') : null;
        $etab = Etab::create([
            'name'                      => $this->name,
            'sigle'                     => $this->sigle,
            'rubrique_id'               => $this->rubrique_id,
            'director'                  => $this->director,
            'slogan'                    => $this->slogan,
            'about'                     => $this->about,
            'status'                    => $this->status ? true : false,
            'image_path'                => $image_path,
        ]);

        Pedagogie::firstOrCreate(['etabId' => $etab->id]);
        Statistic::firstOrCreate(['etabId' => $etab->id]);
        ContactEtab::firstOrCreate(['etabId' => $etab->id]);

        $this->reset();
        $this->showMessage('Etablissement ajouté!');
        return $this->redirect('/adminx/profil-etab', navigate: false);
    }

    public function edit($id)
    {
        $edit = Etab::find($id);
        $this->etab_Id              = $id;
        $this->name                 = $edit->name;
        $this->sigle                = $edit->sigle;
        $this->rubrique_id          = $edit->rubrique_id;
        $this->director             = $edit->director;
        $this->slogan               = $edit->slogan;
        $this->about                = $edit->about;
        $this->status               = $edit->status ? true : false;
        $this->logoCurrent          = $edit->image_path;
    }

    public function update()
    {
        $update = Etab::findOrFail($this->etab_Id);
        $updateData = [
            'name'                     => $this->name,
            'sigle'                     => $this->sigle,
            'rubrique_id'               => $this->rubrique_id,
            'director'                  => $this->director,
            'slogan'                    => $this->slogan,
            'about'                     => $this->about,
            'status'                    => $this->status ? true : false,
        ];

        if ($this->image_path) {
            $updateData['image_path'] = $this->image_path->store('etabs', 'public');
        }

        $update->update($updateData);
        $this->showMessage('Etablissement à jour avec succès!');
        return $this->redirect('/adminx/profil-etab', navigate: false);
    }

    //Pedagogie
    public function pedago($id)
    {
        Etab::find($id);
        $this->pedago_Id = $id;
    }

    public function submitPedagogie()
    {
        $update = Pedagogie::findOrFail($this->pedago_Id);
        $updateData = [
            'respo_mention'             => $this->respo_mention,
            'respo_parcour'             => $this->respo_parcour,

            'domaine'                   => is_array($this->domaine) ? implode(',', $this->domaine) : implode(',', explode(',', $this->domaine)),
            'parcour'                   => is_array($this->parcour) ? implode(',', $this->parcour) : implode(',', explode(',', $this->parcour)),
            'mention'                   => is_array($this->mention) ? implode(',', $this->mention) : implode(',', explode(',', $this->mention)),
        ];
        $update->update($updateData);
        $this->showMessage('Pédagogie avec succès!');
        return $this->redirect('/adminx/profil-etab', navigate: false);
    }

    public function succesPedago($id)
    {
        $pedago = Pedagogie::find($id);
        $this->pedago_Id        = $id;
        $this->domaine          = is_array($pedago->domaine) ? implode(',', $pedago->domaine) : implode(',', explode(',', $pedago->domaine));
        $this->parcour          = is_array($pedago->parcour) ? implode(',', $pedago->parcour) : implode(',', explode(',', $pedago->parcour));
        $this->mention          = is_array($pedago->mention) ? implode(',', $pedago->mention) : implode(',', explode(',', $pedago->mention));
        $this->respo_parcour    = $pedago->respo_parcour;
        $this->respo_mention    = $pedago->respo_mention;
        $this->pedagogie = true;
    }

    // Statistique
    public function state($id)
    {
        Etab::find($id);
        $this->state_Id = $id;
    }

    public function submitState()
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
        return $this->redirect('/adminx/profil-etab', navigate: false);
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
        return $this->redirect('/adminx/profil-etab', navigate: false);
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
        $etab = Etab::findOrFail($id);
        // Detach all related domaines
        $etab->domaines()->detach();

        // Delete all related pedagogies, statistiques, and contact
        $etab->pedagogies()->delete();
        $etab->statistiques()->delete();
        $etab->contact()->delete();
        $etab->delete();

        $this->showMessage('Etablissement a été supprimé!');
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
        $etab = Etab::onlyTrashed()->findOrFail($id);

        $etab->restore();

        $this->showMessage('Etablissement a été restauré!');
    }

    public function forceDelete($id)
    {
        $etab = Etab::onlyTrashed()->findOrFail($id);

        $etab->forceDelete();

        $this->showMessage('Etablissement a été supprimé définitivement!');
    }


    public function render()
    {
        return view('livewire.admin.etabs.listes', [

            'etabs' => Etab::latest()->paginate($this->page),

            'archives' => Etab::onlyTrashed()->latest()->paginate($this->page),
            'archivesCount' => Etab::onlyTrashed()->count(),

            'rubriques' => Rubrique::where('is_active', true)->get(),

        ]);
    }
}
