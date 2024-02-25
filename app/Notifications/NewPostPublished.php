<?php

namespace App\Notifications;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewPostPublished extends Notification
{
    use Queueable;

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $images = explode(',', $this->post->images);

        return (new MailMessage)
            ->subject('Actualités de l\'Université de Mahajanga : ' . Str::limit($this->post->category->name, 40))
            ->view('emails.post_published', ['post' => $this->post, 'images' => $images]);
    }



    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
