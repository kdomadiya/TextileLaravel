<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stock_in_out';
    protected $fillable = [
        'id',
        'product_id',
        'amount',
        'qty',
        'date',
        'particular',
        'type',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
