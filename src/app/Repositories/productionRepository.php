<?php

namespace App\Repositories;

use App\Repositories\ProductionRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Production;

class productionRepository implements productionRepositoryInterface
{
    public function model()
    {
        return Production::class;
    }

    public function allProductions($keyword)
    {
        $query = DB::table('productions');
        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
        return $query->paginate(4);
    }
}
