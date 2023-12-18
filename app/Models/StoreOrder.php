<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'store_id',
        'order_id',
        'data_synced',
        'status'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
}
