<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'staff_cat_id',
        'about',
        'image_path',
        'is_active',
        'matricule',
        'job'
    ];

    public function staffCat()
    {
        return $this->belongsTo(StaffCat::class);
    }
}
