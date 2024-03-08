<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $message = [
            'email.unique' => 'Votre email est déjà utilisée.',
        ];

        $validatedData = $request->validate([
            'email' => 'required|email|unique:abonnements,email',
        ], $message);

        $abonnement = Abonnement::firstOrCreate([
            'email' => $validatedData['email'],
        ]);

        if (!$abonnement->hasVerifiedEmail()) {
            $abonnement->sendEmailVerificationNotification();
        }
        $encrypteId = encrypt($abonnement->id);
        $encrypteEmail = encrypt($abonnement->email);
        return redirect()->route('confirm_email', [
            'email' => $encrypteEmail,
            'id' => $encrypteId,
            'status' => 'verification-email'
        ]);
    }

    public function confirmEmail($email, $id, $status)
    {
        $email = decrypt($email);
        session()->flash('status', __('Un nouveau lien de vérification a été envoyé à l\'adresse e-mail :email vous avez fourni.', ['email' => $email]));
        return view('livewire.newsletter.email_sent');
    }


    public function verifyEmail($id, $email)
    {
        $abonnement = Abonnement::find($id);
        if ($abonnement && !$abonnement->hasVerifiedEmail()) {
            $abonnement->markEmailAsVerified();
            session()->flash('status', __('Votre email a été vérifié avec succès. Vous êtes abonné à l\'Univversité de Mahajanga!'));
            return view('livewire.newsletter.email_sent');
        }
        return view('livewire.newsletter.email_sent')->with('error', 'Le lien de vérification est invalide.');
    }

}
