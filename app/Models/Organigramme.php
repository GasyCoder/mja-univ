<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organigramme extends Model
{
    use HasFactory;

    protected $fillable = [
        'intro',
        'body',
        'image_path',
        'is_active'
    ];

    public function getHtmlAttribute()
    {
        return str($this->body)->markdown();
    }

}
