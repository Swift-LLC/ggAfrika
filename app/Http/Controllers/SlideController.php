<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slides;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slides::orderBy('created_at', 'desc')->paginate(5);

        return view('slide.index', ['slides' => $slides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $slide = new Slides();

        $path = $request->image->store('images', 'public');
        $slide->name = $request->name;
        $slide->image = $path;

        $slide->save();

        return redirect()
            ->route('slides')
            ->with('Slide Added Successfully');
    }

    //Publish Slide
    public function publish($id)
    {
        $slide = Slides::find($id);
        if ($slide->published == 0) {
            $slide->published = 1;
            $slide->update();
        } else {
            $slide->published = 0;
            $slide->update();
        }

        return redirect()->route('slides');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
    public function destroy(Slides $slides)
    {
    
        $slides->delete();

        return redirect()
            ->route('slides')
            ->with('Content Deleted Succesfully');
    }
}
