<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'slogan',
        'intro',
        'body',
        'images_cover'
    ];

    public function getHtmlAttribute()
    {
        return str($this->body)->markdown();
    }
}
