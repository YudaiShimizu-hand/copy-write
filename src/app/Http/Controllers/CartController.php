<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userCarts  = $user->cart;
        $carts = $userCarts->with('productions')->get();
        return view('cart.index')->with('carts', $carts);
    }
}
