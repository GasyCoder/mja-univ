<?php

namespace App\Livewire\Admin;

use App\Models\Regle;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Regles extends Component
{
    use LivewireAlert;

    public $title;
    public $type = false;
    public $body;
    public $ruleId;
    public $updateForm = false;


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

    public function edit($id)
    {
        $edit = Regle::findOrFail($id);
        $this->ruleId   = $id;

        $this->title    = $edit->title;
        $this->body     = $edit->html;
        $this->type     = $edit->type;

        $this->updateForm = true;
    }

    public function updateRegle()
    {
        $update = Regle::findOrFail($this->ruleId);

        $updateData = [
            'title' => $this->title,
            'type'  => $this->type ? true : false,
            'body'  => $this->body
        ];

        $update->update($updateData);
        $this->showMessage('Information a été jour avec succèss!');
        return $this->redirect('/adminx/regles', navigate: false);
    }

    public function cancelUpdate()
    {
        $this->updateForm = false;
    }

    public function render()
    {
        return view('livewire.admin.pages.regles.index', [
            'regles'  => Regle::all(),
        ]);
    }
}
