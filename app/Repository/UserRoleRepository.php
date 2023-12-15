<?php

namespace App\Repository;
use App\Interfaces\UserRoleRepositoryInterface;
use App\Models\UserRole;

class UserRoleRepository extends BaseRepository implements UserRoleRepositoryInterface
{
    public function __construct(UserRole $model)
    {
        parent::__construct($model);
    }
}