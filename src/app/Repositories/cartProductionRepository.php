<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\CartProduction;

class CartProductionRepository
{
    public function model()
    {
        return CartProduction::class;
    }

    public function create($data)
    {
        $newCart = new CartProduction;
        $newCart->create($data);
    }

    public function delete($cartProductionId)
    {
        $destroyData = CartProduction::find($cartProductionId);
        $destroyData->delete();
    }

}
