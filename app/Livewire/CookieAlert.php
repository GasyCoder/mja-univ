<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class CookieAlert extends Component
{
    public function render()
    {
        return view('livewire.cookie-alert');
    }

    public function acceptCookies()
    {
        Cookie::queue('cookies_accepted', true, 60 * 24 * 365); // Expire après 1 an
    }

    public function declineCookies()
    {
        Cookie::queue('cookies_accepted', false, 60 * 24 * 365); // Expire après 1 an
    }
}


