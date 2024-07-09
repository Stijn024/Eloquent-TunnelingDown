<?php

namespace App\Models;

use App\Models\Scopes\AvailableScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected static function booted()
    {
        static::addGlobalScope(new AvailableScope());
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeCheap(Builder $query)
    {
        return $query->where('price', '<', 5000);
    }

    public function scopeExpensive(Builder $query)
    {
        return $query->where('price', '>', 10000);
    }    

    protected function modelName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value),
        );
    }    
}