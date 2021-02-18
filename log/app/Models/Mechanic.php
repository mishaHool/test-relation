<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    function getOwner(){
        return $this->hasOneThrough(Owner::class, Car::class, 'mech_id');
    }
}
