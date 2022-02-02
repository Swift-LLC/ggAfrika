<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

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
        return view('home', ['posts'=>$posts,'categories'=>$categories]);
    }
    public function create()
    {
        //show form to create a blog post
        $categories = Category::all();
        return view('admin.createPost', ['categories'=>$categories] );
    }
    public function store(Request $request)
    {
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();

        // $request->image->move(public_path('/images'),$newImageName);

        $post = new Posts;
        $post->slug = $request->slug;
        $post->title = $request->title;
        $post->about = $request->description;
        $post->body = $request->content;
        $post->category_id = $request->category;
        $post->potrait = $request->image;
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route('posts');
        
    }
    public function showcat($cat )
    {
        //show a blog post
        $categories = Category::all();
        
        $posts = Posts::with('categories')->where('category_id',$cat)->get();
        $videos = Video::with('categories')->where('category_id',$cat)->get();
        $category = Category::find($cat);
        $name = $category->name;
        

        return view('blog.category',['posts'=>$posts, 'categories'=>$categories,'videos'=>$videos], compact('name'));
    }

    public function show(Posts $post )
    {
        //show a blog post
        $categories = Category::all();
        return view('blog.show',['post'=>$post,'categories'=>$categories]);
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
        // $newImageName = time().'-'.$request->slug.'.'.$request->image->extension();

        // $request->image->move(public_path('images'),$newImageName);
        $posts->slug = $request->slug;
        $posts->title = $request->title;
        $posts->about = $request->description;
        $posts->body = $request->content;
        $posts->potrait = $request->image;
        $posts->user_id = Auth::id();
        $posts->update();
        return redirect()->route('posts');
    }
    //Published toggle
    public function publish($id)
    {
        $posts = Posts::find($id);
        if($posts->published == 0)
        {
            $posts->published = 1;
            $posts->update();
        }
        else{
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
