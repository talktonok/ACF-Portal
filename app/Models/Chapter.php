<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    
    // public function user(){
    //     return $this->hasMany(User::class);
    // }
    protected $fillable = [
        'name',
        'state',
        'status',
        'address',
         
    ];

    public function event(){
        return $this->hasMany(Event::class);
    }
}
