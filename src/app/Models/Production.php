<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'detail',
        'img',
    ];

    // public function cartProductions()
    // {
    //     return $this->hasMany(CartProduction::class);
    // }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_production')->withPivot('id');
    }
}
