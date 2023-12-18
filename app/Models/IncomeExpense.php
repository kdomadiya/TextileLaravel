<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'account_id',
        'amount',
        'date',
        'particular',
        'type',
        'status',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'name');
    }
}
