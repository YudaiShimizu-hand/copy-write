<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartRepository
{
    public function model()
    {
        return Cart::class;
    }

    public function create($userId)
    {
        $cart = new Cart;
        $cart->create($userId);
    }

}
