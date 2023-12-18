<?php

namespace App\Repository;
use App\Interfaces\IncomeExpenseRepositoryInterface;
use App\Models\IncomeExpense;

class IncomeExpenseRepository extends BaseRepository implements IncomeExpenseRepositoryInterface
{
    public function __construct(IncomeExpense $model)
    {
        parent::__construct($model);
    }
}