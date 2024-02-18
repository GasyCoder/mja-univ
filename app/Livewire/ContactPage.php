<?php

namespace App\Livewire;

use Closure;
use App\Models\Contact;
use Livewire\Component;
use App\Rules\Recaptcha;

class ContactPage extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $recaptcha_token = '';
    public $recaptchaError = '';

    public function send(): void
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:80',
            'message' => 'required|max:250',
            'recaptcha_token' => ['required', new Recaptcha()]
        ]);

       Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('status', 'Votre message a été envoyé avec succès !');

        $this->reset();

    }

    public function render()
    {
        return view('livewire.contact.index');
    }
}
