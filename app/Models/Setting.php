<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'copyright',
        'email',
        'phone',
        'adresse',
        'description',
        'keywords',
        'is_slider',
        'is_siteactive',
        'message_disabled',
        'facebook',
        'twitter',
        'linkdin',
        'slogan',
        'logo'
    ];
}
