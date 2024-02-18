<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Abonnement;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Abonnements extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $page = 10;
    public $email;

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
        $this->validate(['email' => 'required']);

        Abonnement::create([
            'email'  => $this->email,
        ]);

        $this->reset();
        $this->showMessage('Email ajouté avec succès!');
        return $this->redirect('/adminx/abonne', navigate: false);
    }

    public function desabonne($id)
    {
        $unsubscribed = Abonnement::findOrFail($id);
        $unsubscribed->update([
            'is_subscribed'  => false
        ]);
        $this->showMessage('Email a été désabonné!');
    }

    public function reabonne($id)
    {
        $unsubscribed = Abonnement::findOrFail($id);
        $unsubscribed->update([
            'is_subscribed'  => true
        ]);
        $this->showMessage('Email a été réabonné!');
    }

    public function delete($id)
    {
        $abonne = Abonnement::findOrFail($id);
        $abonne->delete();
    }

    public function render()
    {
        return view('livewire.admin.abonne.index', [

            'abonnes' => Abonnement::latest()->paginate($this->page),
        ]);
    }
}
