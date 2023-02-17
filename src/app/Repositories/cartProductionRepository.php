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

}
