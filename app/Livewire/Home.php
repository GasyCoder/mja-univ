<?php

namespace App\Livewire;

use session;
use App\Models\Post;
use App\Models\Type;
use App\Models\Domaine;
use App\Models\Setting;
use Livewire\Component;
use App\Models\Evenement;
use App\Models\President;
use App\Models\Abonnement;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Home extends Component
{
    use LivewireAlert;
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

    public $email;

    public function abonner()
    {
        $messages = [
            'email.unique' => 'Votre email est déjà utilisée.',
        ];

        $this->validate([
            'email' => 'required|email|unique:abonnements,email',
        ], $messages);

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
        return view('home', [

            'posts' => Post::where('is_active', true)->latest()->take(4)->get(),
            'mot'  => President::first(),
            'sliders'  => Post::where('is_slider', true)->latest()->get(),
            'domaines'  => Domaine::where('is_active', true)->latest()->get(),

            'typeEtabs' => Type::where('is_active', true)->get(),

            'events' => Evenement::where('is_active', true)->where('is_archive', false)->latest()->take(4)->get(),

            'setting' => Setting::first(),
        ]);
    }

}
