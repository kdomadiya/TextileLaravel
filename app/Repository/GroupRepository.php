<?php

namespace App\Repository;
use App\Interfaces\GroupRepositoryInterface;
use App\Models\Group;

class GroupRepository extends BaseRepository implements GroupRepositoryInterface
{
    public function __construct(Group $model)
    {
        parent::__construct($model);
    }
}