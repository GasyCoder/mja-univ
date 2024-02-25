<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Abonnement extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'is_subscribed',
        'email_verified_at'
    ];

    public function hasVerifiedEmail()
    {
        return !is_null($this->email_verified_at);
    }

    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    public function getEmailForVerification()
    {
        return $this->email;
    }

    public function sendEmailVerificationNotification()
    {
        $verificationUrl = URL::signedRoute(
            'verification.verify',
            ['id' => $this->getKey()]
        );

        $this->notify(new \App\Notifications\ConfirmationEmail($verificationUrl));
    }
}
