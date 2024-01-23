<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
        'amount',
        'price',
        'created_at',
        'updated_at'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
   
}
