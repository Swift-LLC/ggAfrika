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
    public function index()
    {
        //show all blog posts
        $categories = Category::all();
        $posts = Posts::orderBy('created_at', 'desc')->paginate(5);
        return view('home', ['posts' => $posts, 'categories' => $categories]);
    }

    //all blogs
    public function showPosts()
    {
        $user = Auth::id();
        $posts = Posts::where('user_id', $user)->get();

        $allPosts = Posts::latest()->get();

        return view('admin.blogs', [
            'posts' => $posts,
            'allPosts' => $allPosts,
        ]);
    }

    //create blog
    public function create()
    {
        //show form to create a blog post
        $categories = Category::all();
        return view('blog.create', ['categories' => $categories]);
    }

    //store a new blog post
    public function store(Request $request)
    {
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();
        // $request->image->move('storage/app/public/images',$newImageName);
        // Storage::disk('public/images')->put( $newImageName, File::get($request->image));

        // try {
            $path = $request->image->store('images', 'public');
            $post = new Posts();
            $post->slug = $request->title;
            $post->title = $request->title;
            $post->about = $request->description;
            $post->body = $request->editor;
            $post->category_id = $request->category;
            $post->potrait = $path;
            $post->user_id = Auth::id();
            $post->save();

            // dd($post);
        // } catch (\Exception $e) {
        //     return back()
        //         ->withInput()
        //         ->withErrors($e);
        // }
        return redirect()->route('posts')->with('message', 'Error Retry');
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
        return view('blog.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
        ]);
        //save the edited post
        $posts = Posts::find($id);
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();
        // $request->image->move(public_path('images'),$newImageName);
        $image = '';

        if (isset($request->image)) {
            $path = $request->image->store('images', 'public');
            $image = $path;
        } else {
            $image = $posts->potrait;
        }
        $posts->slug = $request->title;
        $posts->title = $request->title;
        $posts->about = $request->description;
        $posts->body = $request->content;
        $posts->potrait = $image;
        $posts->user_id = Auth::id();
        $posts->save();
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
