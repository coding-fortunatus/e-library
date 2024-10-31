<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'knowledge_area',
        'publication_year',
        'pages',
        'discipline',
        'publisher',
        'volume',
        'available_to',
    ];
}
