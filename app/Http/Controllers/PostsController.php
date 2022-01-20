<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Category;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //show all blog posts
        $posts = Posts::orderBy('id', 'desc')->paginate(5);
        return view('home', ['posts'=>$posts]);
    }
    public function create()
    {
        //show form to create a blog post
        $categories = Category::all();
        return view('admin.createPost', ['categories'=>$categories] );
    }
    public function store(Request $request)
    {
        //store a new post
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg',
            'slug' => 'required',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);

        $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        $post = new Posts;
        $post->slug = $request->slug;
        $post->title = $request->title;
        $post->about = $request->description;
        $post->body = $request->content;
        $post->potrait = $newImageName;
        $post->user_id = Auth::id();
        $post->save();
        
    }
    public function show(Posts $post )
    {
        //show a blog post
        return view('blog.show',['post'=>$post]);
    }
    public function edit(Posts $post)
    {
        //show form to edit the post
        $categories = Category::all();
        return view('admin.edit',['post'=>$post, 'categories'=>$categories]);

    }
    public function update(Request $request, $id)
    {
        //save the edited post
        $posts = Posts::find($id);
        $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$newImageName);
        $posts->slug = $request->slug;
        $posts->title = $request->title;
        $posts->about = $request->description;
        $posts->body = $request->content;
        $posts->potrait = $newImageName;
        $posts->user_id = Auth::id();
        $posts->update();
    }
    public function destroy(Posts $post)
    {
        //delete a post
        $post->delete();
        return redirect()->route('posts')->withSuccess(_('Post delete successfully'));
    }
}
