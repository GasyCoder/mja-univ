<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    // public function build()
    // {
    //     return $this->markdown('emails.twofactor')
    //     ->subject("Message pour {$this->details['name']}")
    //     ->with(['code' => $this->details]);
    // }

    public function build()
    {
        return $this->markdown('emails.twofactor')
            ->subject($this->details['subject'])
            ->with(['code' => $this->details]);
    }


}
