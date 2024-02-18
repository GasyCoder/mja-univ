<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class President extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'intro',
        'body',
        'bg_color',
        'image_path',
        'is_active',
    ];


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($mot) {
            $mot->uuid = (string) Str::uuid();
        });
    }


    public function getHtmlAttribute()
    {
        return str($this->body)->markdown();
    }
}
