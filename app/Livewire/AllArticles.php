<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AllArticles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 12;

    public function render()
    {
        return view('livewire.article.all-articles', [
            'articles'  => Post::where('is_active', true)->latest()->paginate($this->page),
        ]);
    }
}
