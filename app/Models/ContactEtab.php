<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactEtab extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'etabId',
        'phone_1',
        'phone_2',
        'email',
        'siteweb',
        'facebook',
        'adresse'
    ];

    public function etab()
    {
        return $this->belongsTo(Etab::class, 'etabId');
    }
}
