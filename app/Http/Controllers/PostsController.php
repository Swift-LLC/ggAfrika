<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;

class PostsController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //show all blog posts
        $categories = Category::all();
        $posts = Posts::orderBy('created_at', 'desc')->paginate(5);
        return view('home', ['posts' => $posts, 'categories' => $categories]);
    }
    public function create()
    {
        //show form to create a blog post
        $categories = Category::all();
        return view('admin.createPost', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();
        // $request->image->move('storage/app/public/images',$newImageName);
        // Storage::disk('public/images')->put( $newImageName, File::get($request->image));
        try {
            $path = $request->image->store('images', 'public');
            $post = new Posts();
            $post->slug = $request->slug;
            $post->title = $request->title;
            $post->about = $request->description;
            $post->body = $request->content;
            $post->category_id = $request->category;
            $post->potrait = $path;
            $post->user_id = Auth::id();
            $post->save();
            return redirect()->route('posts');
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(
                'This post title already exists, you cannot duplicate a post instead edit'
            );
        }
    }
    public function showcat($cat)
    {
        //show a blog post
        $categories = Category::all();

        $posts = Posts::with('categories')
            ->where('category_id', $cat)
            ->get();
        $videos = Video::with('categories')
            ->where('category_id', $cat)
            ->get();
        $category = Category::find($cat);
        $name = $category->name;

        return view(
            'blog.category',
            [
                'posts' => $posts,
                'categories' => $categories,
                'videos' => $videos,
            ],
            compact('name')
        );
    }

    public function show(Posts $post)
    {
        //show a blog post
        $cat = $post->category_id;
        $related = Posts::with('categories')
            ->where('category_id', $cat)
            ->get();
        $posts = Posts::all();

        $categories = Category::all();
        return view('blog.show', [
            'post' => $post,
            'categories' => $categories,
            'related' => $related,
            'posts' => $posts,
        ]);
    }
    public function edit(Posts $post)
    {
        //show form to edit the post
        $categories = Category::all();
        return view('admin.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'about' => 'required|min:10|max:100',
        ]);
        //save the edited post
        $posts = Posts::find($id);
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();
        // $request->image->move(public_path('images'),$newImageName);
        $input = $request->all();
        if ($image = $request->image) {
            $path = $request->image->store('images', 'public');
            $input['image'] = $path;
        } else {
            unset($input['image']);
        }
        // $posts->slug = $request->slug;
        // $posts->title = $request->title;
        // $posts->about = $request->description;
        // $posts->body = $request->content;
        // $posts->potrait = $request->image;
        // $posts->user_id = Auth::id();
        $posts->update($input);
        return redirect()->route('posts');
    }
    //Published toggle
    public function publish($id)
    {
        $posts = Posts::find($id);
        if ($posts->published == 0) {
            $posts->published = 1;
            $posts->update();
        } else {
            $posts->published = 0;
            $posts->update();
        }

        return redirect()->route('posts');
    }
    public function destroy(Posts $post)
    {
        //delete a post
        $post->delete();
        return redirect()->route('posts');
    }
}
