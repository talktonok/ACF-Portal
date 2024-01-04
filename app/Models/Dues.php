<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    use HasFactory;

    // Add any additional fields you need in the fillable array
    protected $fillable = [
        'amount',
    ];
}
