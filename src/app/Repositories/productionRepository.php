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

    public function allProductions($keyword, $limit=8)
    {
        $query = DB::table('productions');
        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }else{
            $query->orderBy('id', 'desc');
        }
        return $query->paginate($limit);
    }
}
