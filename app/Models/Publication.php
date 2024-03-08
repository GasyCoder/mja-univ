<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory, SoftDeletes, Searchable;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'file_path',
        'uuid',
        'revue_id',
        'annee_id',
        'volume_id',
        'startPage',
        'endPage',
        'issn',
        'is_active',
        'size',
        'extension',
        'original_name'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function revue()
    {
        return $this->belongsTo(Revue::class);
    }

    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    public function volume()
    {
        return $this->belongsTo(Volume::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($var) {
            $var->uuid = (string) Str::uuid();
        });
    }

}
