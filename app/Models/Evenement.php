<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'uuid',
        'slug',
        'sub_title',
        'description',
        'organisator',
        'location',
        'url_location',
        'dateStart',
        'dateEnd',
        'hourStart',
        'hourEnd',
        'image_cover',
        'file_path',
        'is_active',
        'is_archive',
        'event_type',
        'capacity',
        'price',
        'tags',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'dateStart' => 'datetime',
        'dateEnd' => 'datetime',
        'hourStart' => 'datetime',
        'hourEnd' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            $event->uuid = (string) Str::uuid();
            $event->slug = Str::slug($event->title);
        });
    }
}
