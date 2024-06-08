<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doument extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];
}
