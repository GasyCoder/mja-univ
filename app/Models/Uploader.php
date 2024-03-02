<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Uploader extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'file_name',
        'uuid',
        'original_name',
        'file_path',
        'file_url',
        'thumbnail',
        'size',
        'type_file',
        'extension',
        'is_active'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($file) {
            $file->uuid = (string) Str::uuid();
        });
    }
}
