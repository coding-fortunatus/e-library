<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturenote extends Model
{
    use HasFactory;
    protected $fillable = [
        'course',
        'author',
        'department_id',
        'publication_year',
        'pages',
        'publisher',
        'available_to',
    ];
}
