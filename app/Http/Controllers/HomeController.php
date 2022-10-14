<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Video;
use App\Models\Category;
use App\Models\User;
use App\Models\Slides;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function alleditors()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    //documentations page
    public function doc()
    {
        $categories = Category::all();
        return view('admin.document', ['categories' => $categories]);
    }

    //about page
    public function about()
    {
        $categories = Category::all();
        $posts = Posts::orderBy('updated_at', 'desc')
        ->skip(0)
        ->take(6)
        ->get();
        return view('blog.about', ['categories' => $categories, 'posts' => $posts]);
    }

    //support page
    public function support()
    {
        $categories = Category::all();
        $posts = Posts::orderBy('updated_at', 'desc')
        ->skip(0)
        ->take(6)
        ->get();
        return view('blog.support', ['categories' => $categories, 'posts' => $posts]);
    }

    // advertising page
    public function advertising()
    {
        $categories = Category::all();
        $posts = Posts::orderBy('updated_at', 'desc')
        ->skip(0)
        ->take(6)
        ->get();
        return view('blog.advertising', ['categories' => $categories, 'posts' => $posts]);
    }

    public function policy()
    {
        
        $posts = Posts::orderBy('updated_at', 'desc')
        ->skip(0)
        ->take(6)
        ->get();
        $categories = Category::all();
        return view('blog.policy', ['categories' => $categories, 'posts' => $posts]);
    }
    public function terms()
    {
        
        return view('blog.terms');
    }

    //home page
    public function index()
    {
        $post = Posts::where('category_id', 1)->inRandomOrder()->get();

        $any = Posts::inRandomOrder()->first();

        $posts = Posts::orderBy('updated_at', 'desc')
            ->skip(0)
            ->take(3)
            ->get();
        $popular = Posts::inRandomOrder('updated_at')
            ->take(3)
            ->get();
        
            $topopular = Posts::inRandomOrder('updated_at')
            ->take(7)
            ->get();

        $latest = Posts::latest()->first();

        $slides = Slides::latest()->get();

        $videos = Video::paginate(3);

        $categories = Category::all();



      

        return view('home', [
            'post' => $post,
            'any' => $any,
            'posts' => $posts,
            'videos' => $videos,
            'categories' => $categories,
            'popular' => $popular,
            'topopular' => $topopular,
            'slides' => $slides,
            'latest' => $latest,
         
        ]);
    }

    //admin home page
    public function adminHome()
    {
        $post_count = Posts::all()->count();
        $admins = User::all()->count();
        $slide_count = Slides::all()->count();
        $video_count = Video::all()->count();
        $ppost_count = Posts::all()
            ->where('published', '1')
            ->count();
        $pvideo_count = Video::all()
            ->where('published', '1')
            ->count();
        return view('admin.dashboard', [
            'post_count' => $post_count,
            'video_count' => $video_count,
            'ppost_count' => $ppost_count,
            'pvideo_count' => $pvideo_count,
            'slide_count' => $slide_count,
            'admins' => $admins,
        ]);
    }
}
