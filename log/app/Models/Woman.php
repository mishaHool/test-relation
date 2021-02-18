<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    use HasFactory;
    function roles(){
        return $this->belongsToMany(Role::class, 'role_woman', 'product_id', 'category_id');
    }

}
