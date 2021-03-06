<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    use HasFactory;
    function phone(){
        return $this->hasOne(Phone::class, 'phones_id');
    }
}
