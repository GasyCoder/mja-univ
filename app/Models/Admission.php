<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = ['etabId', 'descriptions', 'file_path'];

    public function etab()
    {
        return $this->belongsTo(Etab::class, 'etabId');
    }
}
