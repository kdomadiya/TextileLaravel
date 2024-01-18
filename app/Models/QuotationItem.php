<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;
    protected $table = 'quotations_items';
    protected $fillable = [
        'id',
        'quotation_id',
        'product_id',
        'quantity',
        'unit_price',
        'created_at',
        'updated_at'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id' ,'id');
    }
}
