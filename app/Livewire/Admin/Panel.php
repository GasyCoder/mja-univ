<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Panel extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page = 10;
    public $name;
    public $email;
    public $subject;
    public $message;
    public $contactId;

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

    public function render()
    {
        return view('livewire.admin.home', [

            'contacts' => Contact::where('is_read', true)->latest()->paginate($this->page),
        ]);
    }

    public function open($id)
    {
        $contact = Contact::findOrFail($id);
        $this->contactId = $id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->subject = $contact->subject;
        $this->message = $contact->message;

        if ($contact->is_read === 1) {
            $contact->update(['is_read' => 0]);
        }
    }


    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $this->showMessage('Supprimé avec succès!');
    }
}
