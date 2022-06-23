<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //getting all videos
        $videos = Video::all();
        $categories = Category::all();

        return view('videos.index', [
            'videos' => $videos,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //creating videos
        $categories = Category::all();
        return view('videos.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //storing to database
        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        $split_url = explode('/', $request->url);
        $video = new Video();
        $video->name = $request->name;
        $video->category_name = $request->category;
        $video->url = end($split_url);
        $video->save();
        return redirect()->route('allvideos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    public function publish($id)
    {
        $posts = Video::find($id);
        if ($posts->published == 0) {
            $posts->published = 1;
            $posts->update();
        } else {
            $posts->published = 0;
            $posts->update();
        }

        return redirect()->route('allvideos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
        $video->delete();
        return redirect()->route('allvideos');
    }
}
