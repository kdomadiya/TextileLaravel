<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'group_id',
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
        'created_at',
        'updated_at'
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'name');
    }
}
