<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    use HasFactory;
    protected $table = 'income_expense';
    protected $fillable = [
        'id',
        'account_id',
        'amount',
        'date',
        'particular',
        'type',
        'status',
        'created_at',
        'updated_at'
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'name');
    }
}
