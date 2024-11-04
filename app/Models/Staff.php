<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'staff_id',
        'phone',
        'department_id',
        'office',
        'status',
    ];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }
}
