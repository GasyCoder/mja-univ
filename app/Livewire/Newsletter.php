<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Abonnement;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Newsletter extends Component
{
    use LivewireAlert;

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

    public function abonner()
    {
        $this->validate(['email' => 'required']);

        $abonnement = Abonnement::firstOrCreate([
            'email' => $this->email,
        ]);

        if (!$abonnement->hasVerifiedEmail()) {
            $abonnement->sendEmailVerificationNotification();
        }

        $this->reset();
        session()->flash('sent', 'Veuillez confirmer votre email.');
    }


    public function render()
    {
        return view('livewire.newsletter');
    }
}
