<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartProductionService;
use App\Services\CartService;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

class CartProductionController extends Controller
{

    private $cartProductionService;
    private $cartService;

    public function __construct(CartProductionService $cartProductionService, CartService $cartService)
    {
         $this->cartProductionService = $cartProductionService;
         $this->cartService = $cartService;
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        if(isset($user->cart)){
            // $authUserId = Auth::user()->id;
            // $this->cartService->create($authUserId);

            $cart = $user->id;
            $production = $request->id;
            $this->cartProductionService->create($production, $cart);
            return redirect()->route('cart.index');
        }else{
            $authUserId = Auth::user()->id;
            $this->cartService->create($authUserId);

            $cart = $user->id;
            $production = $request->id;
            $this->cartProductionService->create($production, $cart);
            return redirect()->route('cart.index');
        }
    }

    public function destroy($cartProductionId)
    {
        $this->cartProductionService->delete($cartProductionId);
        return redirect()->route('cart.index');
    }
}
