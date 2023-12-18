<?php

namespace App\Repository;
use App\Interfaces\StoreOrderRepositoryInterface;
use App\Models\StoreOrder;

class StoreOrderRepository extends BaseRepository implements StoreOrderRepositoryInterface
{
    public function __construct(StoreOrder $model)
    {
        parent::__construct($model);
    }
}