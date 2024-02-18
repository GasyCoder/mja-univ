<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidentStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'president_name',
        'president_year',
        'president_avatar',
        'is_current',
        'is_interim',
        'is_dead',
        'decret',
        'mandat'
    ];
}
