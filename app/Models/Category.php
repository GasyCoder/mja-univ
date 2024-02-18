<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color', 'is_active'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);

            // Ajoutez ce code pour attribuer une couleur aléatoire
            $colors = ['danger', 'success', 'warning', 'info', 'primary', 'dark'];
            $randomIndex = mt_rand(0, count($colors) - 1);

            // Attribuez la couleur aléatoire à la propriété 'color' du modèle
            $model->color = $colors[$randomIndex];
        });
    }
}
