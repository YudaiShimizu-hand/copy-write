<?php

namespace App\Services;

use App\Repositories\CartRepository;

class CartService
{

    private $cartRepo;

    public function __construct(CartRepository $cartRepo)
    {
         $this->cartRepo = $cartRepo;
    }

    public function create($authUserId)
    {
        $userId = array();
        $userId['user_id'] = $authUserId;
        return $this->cartRepo->create($userId);
    }
}
