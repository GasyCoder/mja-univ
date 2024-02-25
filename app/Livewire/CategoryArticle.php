<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryArticle extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 30;
    public $catId;
    public $name;

    public function mount($slug)
    {
        $category = Category::where('is_active', true)->where('slug', $slug)->firstOrFail();

        $this->name         = $category->name;
        $this->catId        = $category->id;
    }


    public function render()
    {
        return view('livewire.article.categorie.posts', [

            'articles' => Post::where('category_id', $this->catId)->where('is_active', true)->paginate($this->page),

        ]);
    }
}
