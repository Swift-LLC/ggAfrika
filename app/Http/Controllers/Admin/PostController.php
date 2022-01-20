<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    //
    public function _construct()
    {
        $this->middleware('is_admin');
    }

    public function showPosts()
    {
        $posts = Posts::all();
        return view('admin.Posts',['posts'=>$posts]);

    }
}
