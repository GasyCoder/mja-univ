<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Domaine;
use App\Models\Setting;
use Livewire\Component;
use App\Models\Evenement;
use App\Models\President;

class Home extends Component
{
    public function render()
    {
        return view('home', [

            'posts' => Post::where('is_active', true)->latest()->take(4)->get(),
            'mot'  => President::first(),
            'sliders'  => Post::where('is_slider', true)->latest()->get(),
            'domaines'  => Domaine::where('is_active', true)->latest()->get(),

            'events' => Evenement::where('is_active', true)->where('is_archive', false)->latest()->take(4)->get(),

            'setting' => Setting::first(),
        ]);
    }

}
