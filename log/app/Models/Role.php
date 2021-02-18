<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    function women(){
        return $this->belongsToMany(Woman::class, 'role_woman', 'category_id', 'product_id');
    }

}
