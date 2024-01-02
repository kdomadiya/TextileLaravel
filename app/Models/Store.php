<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $fillable = [
        'id',
        'account_id',
        'name',
        'url',
        'api_key',
        'api_secret',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class, 'name');
    }
}
