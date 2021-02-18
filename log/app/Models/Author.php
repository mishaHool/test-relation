<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $guarded =  [];
    function comment(){
        return $this->hasMany(Comment::class, 'name', 'name_prime');
    }
}
