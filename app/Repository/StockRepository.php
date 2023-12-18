<?php

namespace App\Repository;
use App\Interfaces\StockRepositoryInterface;
use App\Models\Stock;

class StockRepository extends BaseRepository implements StockRepositoryInterface
{
    public function __construct(Stock $model)
    {
        parent::__construct($model);
    }
}