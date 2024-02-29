<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Preinscrit extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'year_univ',
        'etab_id',
        'url_file',
        'is_active'
    ];

    public function etab()
    {
        return $this->belongsTo(Etab::class);
    }
}
