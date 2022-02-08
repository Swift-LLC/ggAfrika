<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    // public function _construct()
    // {
    //     $this->middleware('is_admin');
    // }

    public function showPosts()
    {
        $user = Auth::id();
        $posts = Posts::where('user_id',$user)->get();
        $allPosts = Posts::all();
        return view('admin.Posts',['posts'=>$posts,'allPosts'=>$allPosts]);

    }
    public function allCategory()
    {
        $category = Category::all();
        ;
        
        return view('admin.category',['category'=>$category,]);
    }
    public function deleteCategory(Category $cat)
    {
        $cat->delete();
        return redirect()->route('category');
    }
}
