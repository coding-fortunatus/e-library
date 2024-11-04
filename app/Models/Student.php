<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'matric_number',
        'faculty_id',
        'department_id',
        'status',
    ];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }
}
