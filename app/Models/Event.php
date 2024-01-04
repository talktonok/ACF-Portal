<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'theme',
        'description',
        'start_time',
        'start_date',
        'end_date',
        'end_time',
        'chapter_id',
        'user_id',
    ];

    // public function chapter(){
    //     return $this->belongsTo(Chapter::class);
    // }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
