<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function show(){
        $posts = Post::paginate(4);
        // dd($posts);
        return view('home', ['posts'=>$posts]);
    }
}
