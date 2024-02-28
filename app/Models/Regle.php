<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'uuid',
        'slug',
        'type',
        'body',
    ];

    public function getHtmlAttribute()
    {
        return str($this->body)->markdown();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }
}

