<?php

namespace App\Livewire;

use Livewire\Component;

class CookieAlert extends Component
{
    public function render()
    {
        return view('livewire.cookie-alert');
    }

    public function acceptCookies()
    {
        session()->put('cookies_accepted', true);
    }

    public function declineCookies()
    {
        session()->put('cookies_declined', true);
    }
}
