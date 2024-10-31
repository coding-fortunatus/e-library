<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_title',
        'topic',
        'author',
        'department_id',
        'publication_year',
        'pages',
        'publisher',
        'available_to',
    ];
}
