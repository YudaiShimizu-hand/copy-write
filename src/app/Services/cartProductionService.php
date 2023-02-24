<?php

namespace App\Services;

use App\Repositories\CartProductionRepository;

class CartProductionService
{

    private $cartProductionRepo;

    public function __construct(CartProductionRepository $cartProductionRepo)
    {
        return $this->cartProductionRepo = $cartProductionRepo;
    }

    public function create($production, $cart)
    {
        $data = array();
        $data['cart_id'] = $cart;
        $data['production_id'] = $production;
        $this->cartProductionRepo->create($data);
    }

    public function delete($cartProductionId)
    {
        $this->cartProductionRepo->delete($cartProductionId);
    }
}
