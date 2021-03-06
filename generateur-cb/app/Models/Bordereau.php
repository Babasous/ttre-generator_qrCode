<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_tracking',
         'nombre_article',
         'article',
         'description'
    ];
}
