<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartProductionService;
use Illuminate\Support\Facades\Auth;

class CartProductionController extends Controller
{

    private $cartProductionService;

    public function __construct(CartProductionService $cartProductionService)
    {
        return $this->cartProductionService = $cartProductionService;
    }

    public function create(Request $request)
    {
        if(isset(Auth::user()->cart)){
            $cart = Auth::user()->cart->id;
            $production = $request->all();
            $this->cartProductionService->create($production, $cart);
        }else{
        }
    }
}
