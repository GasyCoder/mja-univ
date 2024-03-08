<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Models\Contact;
use Livewire\Component;
use App\Models\Evenement;
use App\Models\Abonnement;
use App\Models\ActivityLog;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Cache;
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
    public $pageLogs = 1;
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
        return view('livewire.admin.panel', [
            'contacts'  => Contact::where('is_read', true)->latest()->paginate($this->page),
            'posts'     => Post::where('is_active', true)->count(),
            'events'    => Evenement::where('is_active', true)->count(),
            'abonnes'   => Abonnement::whereNotNull('email_verified_at')->count(),

            'logs'      => Cache::remember('logs', 60, function () {
                return ActivityLog::latest()->paginate($this->pageLogs);
            })
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
