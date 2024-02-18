<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\President;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Presidents extends Component
{
    use WithFileUploads, AuthorizesRequests, LivewireAlert;

    #[Validate('nullable|image|max:2024')]
    public $image_path;

    public $name;
    public $intro;
    public $body;
    public $bg_color;
    public $is_active = true;

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

    public function mount(){

        $mot = President::first();

        $this->name             = $mot->name;
        $this->intro            = $mot->intro;
        $this->body             = $mot->html;
        $this->bg_color         = $mot->bg_color;
        $this->is_active        = $mot->is_active ? true :  false;



        $this->currentImage      = $mot->image_path;
    }

    public function update()
    {
        $this->validate();
        $president = President::first();

        $updateData = [
            'name'      => $this->name,
            'intro'     => $this->intro,
            'body'      => $this->body,
            'bg_color'  => $this->bg_color,
            'is_active' => $this->is_active ? true : false,
        ];

        if ($this->image_path) {
            $updateData['image_path'] = $this->image_path->store('president', 'public');
        }

        $president->update($updateData);

        $this->showMessage('Mise à jour avec succèss!');

        return $this->redirect('/adminx/president', navigate: false);
    }

    public function render()
    {
        return view('livewire.admin.president.motpresident');
    }
}
