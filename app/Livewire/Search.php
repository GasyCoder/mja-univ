<?php

namespace App\Livewire;

use App\Models\Etab;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class Search extends Component
{
    public $search = '';

    public function mount()
    {
        $this->search = request()->query('search', '');
    }
    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $etabResults = Etab::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('sigle', 'like', '%' . $this->search . '%')
                ->get()
                ->map(function ($record) {
                    $record['type'] = 'Etab';
                    return $record;
                });

            $postResults = Post::where('title', 'like', '%' . $this->search . '%')
                ->get()
                ->map(function ($record) {
                    $record['type'] = 'Post';
                    return $record;
                });

            $searchResults = $etabResults->concat($postResults)->toArray();
        }

        return view('livewire.search', [
            'searchResults' => $searchResults,
        ]);
    }


}
