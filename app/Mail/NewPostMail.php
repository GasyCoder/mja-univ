<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function build()
    {
        return $this->view('emails.newPost')
            ->with([
                'title' => $this->post->title,
                'sub_title' => $this->post->sub_title,
                'contenus' => $this->post->contenus,
                'images' => $this->post->images,
            ]);
    }
}
