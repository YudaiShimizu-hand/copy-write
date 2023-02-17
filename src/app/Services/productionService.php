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

    public function allProductions($conditions, $limit=8)
    {
        return $this->productionRepo->allProductions($conditions, $limit);
    }
}
