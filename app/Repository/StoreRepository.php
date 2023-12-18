<?php

namespace App\Repository;
use App\Interfaces\StoreRepositoryInterface;
use App\Models\Store;

class StoreRepository extends BaseRepository implements StoreRepositoryInterface
{
    public function __construct(Store $model)
    {
        parent::__construct($model);
    }
}