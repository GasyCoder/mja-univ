<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revue extends Model
{
    use HasFactory;

    protected $fillable = [
        'sigle',
        'uuid',
        'sub_title',
        'logo',
        'is_active',
    ];

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($var) {
            $var->uuid = (string) Str::uuid();
        });
    }

}
