<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'slug',
        'etab_id',
        'resume',
        'icon_path',
        'is_active',
    ];

    public function etabs()
    {
        return $this->belongsToMany(Etab::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($domaine) {
            $domaine->uuid = (string) Str::uuid();
            $domaine->slug = Str::slug($domaine->name) . '-' . Str::random(5);
        });
    }

}
