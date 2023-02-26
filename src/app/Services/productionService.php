<?php

namespace App\Services;

use App\Repositories\ProductionRepository;

class ProductionService
{

    private $productionRepo;

    public function __construct(ProductionRepository $productionRepo)
    {
        return $this->productionRepo = $productionRepo;
    }

    public function allProductions($keyword)
    {
        return $this->productionRepo->allProductions($keyword);
    }
}
