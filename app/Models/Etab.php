<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etab extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'uuid',
        'rubrique_id',
        'sigle',
        'director',
        'slogan',
        'about',
        'image_path',
        'status'
    ];

    public function domaines()
    {
        return $this->belongsToMany(Domaine::class);
    }

    public function rubrique()
    {
        return $this->belongsTo(Rubrique::class);
    }

    public function pedagogies()
    {
        return $this->hasMany(Pedagogie::class, 'etabId');
    }

    public function statistiques()
    {
        return $this->hasMany(Statistic::class, 'etabId');
    }

    public function contact()
    {
        return $this->hasOne(ContactEtab::class, 'etabId');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($etab) {
            $etab->uuid = (string) Str::uuid();
        });
    }
}
