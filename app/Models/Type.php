<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_active', 'slug'];

    public function etabs()
    {
        return $this->hasMany(Etab::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);

            // Ajoutez ce code pour attribuer une couleur aléatoire
            $colors = ['danger', 'success', 'warning', 'info', 'primary', 'dark'];
            $model->bg_color = $colors[array_rand($colors)];
        });
    }
}
