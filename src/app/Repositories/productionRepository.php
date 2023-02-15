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

    public function allProductions($conditions, $limit=8)
    {
        $query = DB::table('productions')->orderBy('id', 'desc');
        return $query->paginate($limit);
    }
}
