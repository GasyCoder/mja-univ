<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffCat extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title',
        'is_active',
    ];

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
