<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class CookieAlert extends Component
{
    public function mount()
    {
        $this->checkCookie();
    }

    public function render()
    {
        return view('livewire.cookie-alert');
    }

    public function checkCookie()
    {
        if (!Cookie::has('cookies_accepted')) {
            $this->showCookiePopup = true;
        } else {
            $this->showCookiePopup = false;
        }
    }

    public function acceptCookies()
    {
        Cookie::queue('cookies_accepted', true, 60 * 24 * 365); // Expire after 1 year
        $this->showCookiePopup = false; // Hide popup immediately
    }

    public function declineCookies()
    {
        Cookie::queue('cookies_accepted', false, 60 * 24 * 365); // Expire after 1 year
        // Optionally handle decline scenario (e.g., display a message)
    }

    public $showCookiePopup = false; // New property to track popup visibility
}



