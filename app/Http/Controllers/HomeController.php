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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //documentations page
    public function doc()
    {
        $categories = Category::all();
        return view('admin.document',['categories'=>$categories,]);
    }

    //about page
    public function about(){
        $categories = Category::all();
        return view('blog.about',['categories'=>$categories,]);
    }

    //support page
    public function support(){
         $categories = Category::all();
        return view('blog.support',['categories'=>$categories,]);
    }

    // advertising page
    public function advertising(){
        $categories = Category::all();
        return view('blog.advertising',['categories'=>$categories,]);
    }

    //home page
    public function index()
    {
        $post = Posts::orderBy('updated_at','desc')->skip(0)->take(4)->get();
        $posts = Posts::orderBy('updated_at','desc')->skip(0)->take(6)->get();
        $popular = Posts::inRandomOrder('updated_at')->take(6)->get();
        $videos = Video::paginate(3);
        $categories = Category::all();
        return view('home',['post'=>$post,'posts'=>$posts,'videos'=>$videos,'categories'=>$categories,'popular'=>$popular]);
    }

    //admin home page
    public function adminHome(){
        $post_count = Posts::all()->count();
        $admins = User::all()->count();
        $video_count = Video::all()->count();
        $ppost_count = Posts::all()->where('published','1')->count();
        $pvideo_count = Video::all()->where('published','1')->count();
        return view('admin.Dashboard',['post_count'=>$post_count,'video_count'=>$video_count,'ppost_count'=>$ppost_count,'pvideo_count'=>$pvideo_count,'admins'=>$admins]);
    }
   
     
}
