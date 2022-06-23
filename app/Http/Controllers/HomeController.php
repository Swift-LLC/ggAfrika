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
        return view('blog.about', ['categories' => $categories]);
    }

    //support page
    public function support()
    {
        $categories = Category::all();
        return view('blog.support', ['categories' => $categories]);
    }

    // advertising page
    public function advertising()
    {
        $categories = Category::all();
        return view('blog.advertising', ['categories' => $categories]);
    }

    //home page
    public function index()
    {
        $post = Posts::orderBy('updated_at', 'desc')
            ->skip(0)
            ->take(4)
            ->get();
        $posts = Posts::orderBy('updated_at', 'desc')
            ->skip(0)
            ->take(6)
            ->get();
        $popular = Posts::inRandomOrder('updated_at')
            ->take(6)
            ->get();

        $slides = Slides::latest()->get();

        $videos = Video::paginate(3);

        $categories = Category::all();
        return view('home', [
            'post' => $post,
            'posts' => $posts,
            'videos' => $videos,
            'categories' => $categories,
            'popular' => $popular,
            'slides' => $slides,
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
