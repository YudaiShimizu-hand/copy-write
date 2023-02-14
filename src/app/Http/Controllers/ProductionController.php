<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductionService;

class ProductionController extends Controller
{

    private $productionService;

    public function __construct(ProductionService $productionService)
    {
        return $this->productionService = $productionService;
    }

    public function index(Request $request){
        $conditions = $request->all();
        $productions = $this->productionService->allProductions($conditions);
        return view('production.index')->with('productions', $productions);
    }
}
