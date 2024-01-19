<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'account_id',
        'date',
        'status',
        'created_at',
        'updated_at'
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id','id');
    }
    public function items()
    {
        return $this->hasMany(QuotationItem::class);
    }
}
