<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'sub_title',
        'uuid',
        'slug',
        'category_id',
        'images',
        'is_slider',
        'is_active',
        'contenus',
        'bg_color',
        'send_to_subscribers'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->uuid = (string) Str::uuid();
            $post->slug = $post->createSlug($post->title);

            // Ajoutez ce code pour attribuer une couleur aléatoire
            $colors = ['danger', 'success', 'warning', 'info', 'primary', 'dark'];
            $post->bg_color = $colors[array_rand($colors)];
        });
    }

    protected function createSlug($title)
    {
        $slug = Str::slug($title, '-');
        $count = Post::where('slug', 'like', "%$slug%")->count();
        return $count > 0 ? $slug . '-' . ($count + 1) : $slug;
    }

    public function getHtmlAttribute()
    {
        return str($this->contenus)->markdown();
    }

}
