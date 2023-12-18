<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'goup_id',
        'name',
        'alias',
        'opening_balance',
        'firstname',
        'lastname',
        'pancard',
        'gst_number',
        'mobile',
        'email',
        'address',
        'status',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'name');
    }
}
