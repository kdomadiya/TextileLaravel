<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'id',
        'account_id',
        'date',
        'total',
        'tax',
        'subtotal',
        'created_at',
        'updated_at'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
