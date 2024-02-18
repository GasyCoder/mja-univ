<?php

namespace App\Listeners;

use App\Mail\NewPostMail;
use App\Models\Abonnement;
use App\Events\NewPostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewPostEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(NewPostCreated $event)
    {
        $abonnements = Abonnement::where('is_subscribed', true)->get();

        foreach ($abonnements as $abonnement) {
            Mail::to($abonnement->email)->send(new NewPostMail($event->post));
        }
    }
}
