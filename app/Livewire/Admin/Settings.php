<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use App\Models\ActivityLog;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Settings extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    #[Validate('nullable|image|max:2120')]
    public $logo;

    public $site_name;
    public $copyright;
    public $email;
    public $phone;
    public $adresse;
    public $description;
    public $keywords = [];
    public $is_slider;
    public $is_siteactive;
    public $message_disabled;
    public $facebook;
    public $twitter;
    public $linkdin;
    public $slogan;
    public $dbLogo;

    public $current_password;
    public $password;
    public $password_confirmation;
    public $type_header;

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
        $settings = Setting::first();
        $this->site_name        = $settings->site_name;
        $this->copyright        = $settings->copyright;
        $this->email            = $settings->email;
        $this->phone            = $settings->phone;
        $this->adresse          = $settings->adresse;
        $this->description      = $settings->description;
        $this->is_slider        = $settings->is_slider ? true : false;
        $this->is_siteactive    = $settings->is_siteactive ? true : false;
        $this->message_disabled = $settings->message_disabled;
        $this->facebook         = $settings->facebook;
        $this->twitter          = $settings->twitter;
        $this->linkdin          = $settings->linkdin;
        $this->slogan           = $settings->slogan;
        $this->type_header      = $settings->type_header ? true : false;

        $this->dbLogo           = $settings->logo;

        $this->keywords         =  is_array($settings->keywords) ? implode(',', $settings->keywords) : implode(',', explode(',', $settings->keywords));
    }

    public function update_one()
    {
        $settings = Setting::first();
        $settings->update([
            'site_name' => $this->site_name,
            'copyright' => $this->copyright,
            'email' => $this->email,
            'phone' => $this->phone,
            'adresse' => $this->adresse,
            'slogan' => $this->slogan,
            'description' => $this->description,
            'keywords' => is_array($this->keywords) ? implode(',', $this->keywords) : implode(',', explode(',', $this->keywords)),
        ]);

        if ($this->logo) {
            $settings->logo = $this->logo->store('settings', 'public');
            $settings->save();
        }

        $this->showMessage('Mise à jour a été succèss!');
        return $this->redirect('/adminx/settings', navigate: true);
    }

    public function update_two()
    {
        $settings = Setting::first();
        $settings->update([
            'is_slider' => $this->is_slider,
            'is_siteactive' => $this->is_siteactive,
            'type_header'   => $this->type_header,
            'message_disabled' => $this->message_disabled,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'linkdin' => $this->linkdin,
        ]);
        $this->showMessage('Mise à jour a été succèss!');
        return $this->redirect('/adminx/settings', navigate: true);
    }


    public function update_password()
    {
        $validated = $this->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        $user = Auth()->user();
        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->showMessage('Mise à jour a été succèss!');
        return $this->redirect('/adminx/settings', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.settings.index', [

            'logs' => ActivityLog::latest()->paginate(10)
        ]);
    }
}
