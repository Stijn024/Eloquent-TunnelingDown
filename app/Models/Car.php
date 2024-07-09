<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}