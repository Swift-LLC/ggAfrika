<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Video;
use App\Models\Category;
use App\Models\User;

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
        $post = Posts::orderBy('updated_at','desc')->skip(0)->take(4);
        $posts = Posts::orderBy('updated_at','desc')->get();
        $popular = Posts::inRandomOrder('updated_at')->get();
        $videos = Video::paginate(3);
        $categories = Category::all();
        return view('home',['post'=>$post,'posts'=>$posts,'videos'=>$videos,'categories'=>$categories,'popular'=>$popular]);
    }
    public function adminHome(){
        $post_count = Posts::all()->count();
        $admins = User::all()->count();
        $video_count = Video::all()->count();
        $ppost_count = Posts::all()->where('published','1')->count();
        $pvideo_count = Video::all()->where('published','1')->count();
        return view('admin.Dashboard',['post_count'=>$post_count,'video_count'=>$video_count,'ppost_count'=>$ppost_count,'pvideo_count'=>$pvideo_count,'admins'=>$admins]);
    }
    public function videos(){
        return view('admin.video');
    }
    
}
