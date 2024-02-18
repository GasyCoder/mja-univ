<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Organigramme;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Organigrammes extends Component
{
    use WithFileUploads, AuthorizesRequests, LivewireAlert;

    #[Validate('nullable|image|max:2120')]
    public $image_path;
    public $intro;
    public $body;
    public $is_active;

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

        $edit = Organigramme::first();

        $this->intro            = $edit->intro;
        $this->body             = $edit->html;
        $this->is_active        = $edit->is_active ? true : false;

        $this->currentImage     = $edit->image_path;
    }

    public function update()
    {

        $update = Organigramme::first();
        $updateData = [
            'intro'             => $this->intro,
            'body'              => $this->body,
            'is_active'         => $this->is_active ? true : false,
        ];
        if ($this->image_path) {
            $updateData['image_path'] = $this->image_path->store('orga', 'public');
        }

        $update->update($updateData);

        $this->showMessage('Mise à jour avec succèss!');

        return $this->redirect('/adminx/orga', navigate: false);
    }

    public function render()
    {
        return view('livewire.admin.universite.organigramme');
    }
}
