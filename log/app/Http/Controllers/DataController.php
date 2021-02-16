<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Comment;
use App\Models\Man;

class DataController extends Controller
{
    function add_OTM(Request $request){
        $res = $request->all();
        unset($res['_token']);
        unset($res['submit']);
        $ttlsInDB=[];
        Comment::create($res);
        unset($res['text']);
        Author::create($res);
        return redirect()->route('add_page');
    }
    function add_page(){
        $phone = Man::find(1)->phone;
        echo $phone;
    }
}
