<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedagogie extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'etabId',
        'domaine',
        'mention',
        'parcour',
        'respo_mention',
        'respo_parcour'
    ];

    public function etab()
    {
        return $this->belongsTo(Etab::class, 'etabId');
    }
}
