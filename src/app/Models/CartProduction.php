<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduction extends Model
{
    use HasFactory;


    public function cart()
    {
        return $this->belongsTo(Cart::class, 'foreign_key');
    }

    public function production()
    {
        return $this->belongsTo(Production::class, 'foreign_key');
    }
}
