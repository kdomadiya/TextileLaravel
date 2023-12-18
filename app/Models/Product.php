<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'amount',
        'opening_stock',
        'description',
        'batch_number',
        'expiry_date',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
}
