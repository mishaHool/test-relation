<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Comment;
use App\Models\Man;
use App\Models\Mechanic;
use App\Models\Role;
use App\Models\Woman;

class DataController extends Controller
{
    function add_page(){
        // $phone = Man::find(1)->phone;
        // echo $phone;
        // $comments = Author::find(2)->comment;
        // foreach ($comments as $comment) {
        //     echo $comment;
        // }
        // $mech = Mechanic::find(2)->getOwner;
        // echo $mech;
        $user = Woman::find(1);
        foreach ($user->roles as $role) {
            echo $role;
        }
    }
}
