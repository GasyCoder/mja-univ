<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Historique;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Historiques extends Component
{
    use WithFileUploads, AuthorizesRequests, LivewireAlert;

    #[Validate(['images_cover.*' => 'image|max:2024'])]
    public $images_cover = [];

    public $slogan;
    public $intro;
    public $body;

    public $currentImage;

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

    public function mount()
    {

        $edit = Historique::first();

        $this->slogan           = $edit->slogan;
        $this->intro            = $edit->intro;
        $this->body             = $edit->html;

        $this->currentImage      = explode(',', $edit->images_cover);
    }

    public function update()
    {
        if (count($this->images_cover) > 4) {
            $this->alert('warning', 'Vous ne pouvez télécharger que 4 images au maximum.', [
                'toast' => true,
                'icon' => 'error',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return;
        }

        $this->validate([
            'images_cover' => 'nullable|array|max:4',
        ]);
        $update = Historique::first();

        $imagePaths = explode(',', $update->images_cover);

        if ($this->images_cover) {
            $imagePaths = []; // reset the array if new images are uploaded
            foreach ($this->images_cover as $image) {
                if ($image && $image->isValid()) {
                    $imagePaths[] = $image->store('historique', 'public');
                }
            }
        }



        $updateData = [
            'slogan'    => $this->slogan,
            'intro'     => $this->intro,
            'body'      => $this->body,
            'images_cover'            => implode(',', $imagePaths),
        ];

        $update->update($updateData);

        $this->showMessage('Mise à jour avec succèss!');

        return $this->redirect('/adminx/historique', navigate: false);
    }

    public function render()
    {
        return view('livewire.admin.historique.index');
    }
}
