<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Fillable required to add the data
    protected $fillable = [
        'name',
        'email',
        'image',
    ];
}
