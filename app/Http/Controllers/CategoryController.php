<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Posts;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all the categories
        $category = Category::all();
        return view('category.index', ['category' => $category]);
    }

    //shows all categories
    public function allCategory()
    {
        $category = Category::all();
        return view('category.index', ['category' => $category]);
    }

    public function showcat($id, $category)
    {
        //show a blog post
        $categories = Category::all();

        $posts = Posts::with('categories')
            ->where('category_id', $id)
            ->latest()
            ->inRandomOrder()
            ->take(4)
            ->get();

        $related = Posts::with('categories')
            ->where('category_id', $id)
            ->take(6)
            ->inRandomOrder()
            ->get();

        $videos = Video::where('category_id', $id)
            ->latest()
            ->inRandomOrder()
            ->take(4)
            ->get();

       

        

        $name = $category;

        return view(
            'blog.category',
            [
                'posts' => $posts,
                'categories' => $categories,
                'videos' => $videos,
                'related' => $related,
                
            ],
            compact('name')
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Category();

        $cat->name = $request->name;

        $cat->save();

        return redirect()->route('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $cat)
    {
        //
        $cat->delete();
        return redirect()->route('category');
    }
}
