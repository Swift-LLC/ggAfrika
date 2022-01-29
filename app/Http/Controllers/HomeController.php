<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Video;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
        
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Posts::paginate(3);
        $videos = Video::paginate(3);
        $categories = Category::all();
        return view('home',['posts'=>$posts,'videos'=>$videos,'categories'=>$categories]);
    }
    public function adminHome(){
        return view('admin.Dashboard');
    }
    public function videos(){
        return view('admin.video');
    }
    
}
