<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudenController extends Controller
{

    public function getAllPosts(){
        
        $posts = DB::table('final_examkarims')->get();
        return view ('posts', compact('posts'));

    }
    public function addPost(){
        

        return view ('add-Posts');

    }
    
    
}
