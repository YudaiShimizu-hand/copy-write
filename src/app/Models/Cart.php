<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    // public function cartProductions()
    // {
    //     return $this->hasMany(CartProduction::class);
    // }

    public function productions()
    {
        return $this->belongsToMany(Production::class, 'cart_productions');
    }
}
