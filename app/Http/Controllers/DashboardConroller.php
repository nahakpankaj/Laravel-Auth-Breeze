<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardConroller extends Controller
{
    //
    public function show(){
        $posts = Post::all();
        // dd($posts);
        return view('dashboard', ['posts'=>$posts]);
    }
}
