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

    // public function acceptCookies()
    // {
    //     return response('')->cookie('cookies_accepted', true, 60 * 24 * 365); // Expire après 1 an
    // }

    // public function declineCookies()
    // {
    //     return response('')->cookie('cookies_declined', true, 60 * 24 * 365); // Expire après 1 an
    // }
}
