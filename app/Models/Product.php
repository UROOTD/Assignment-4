<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'image',
        'rating',
    ];

    public function getImageAttribute($value){
        return $value ? url($value) : $value;
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'product_id', 'id');
    }
}
