<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'p_id',
        'name',
        'status',
        'created_at',
        'updated_at'
    ];
    public function group()
    {
        return $this->belongsTo(Group::class, 'name');
    }
}
