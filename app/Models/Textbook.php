<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'publication_year',
        'pages',
        'discipline_subject',
        'publisher',
        'edition',
        'available_to',
    ];
}
