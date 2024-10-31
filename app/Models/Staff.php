<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
