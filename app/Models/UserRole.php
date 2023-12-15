<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'parent_id',
        'name',
        'permissions',
        'status',
    ];
    public function userroles()
    {
        return $this->belongsTo(UserRole::class, 'name');
    }
}
