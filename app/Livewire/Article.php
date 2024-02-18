<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;

class Article extends Component
{
    public $title, $sub_title, $category, $contenus, $images, $slug, $created;

    public function mount($slug){
        $article = Post::where('is_active', true)->where('slug', $slug)->firstOrFail();

        $this->title        = $article->title;
        $this->sub_title    = $article->sub_title;
        $this->category     = $article->category->name;
        $this->contenus     = $article->html;
        $this->images       = explode(',', $article->images);
        $this->created      = $article->created_at;
    }
    public function render()
    {
        return view('livewire.article.show-article', [

            'categories' => Category::where('is_active', true)->get(),
            'related_posts' => Post::where('slug', '!=', $this->slug)->where('is_active', true)->latest()->get(),
        ]);
    }
}
