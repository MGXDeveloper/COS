<?php

namespace App\Http\Controllers;

use App\Models\Video;
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
        $videos=Video::all();
        return view('Admin.showAllVideos',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Add_Video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(empty($request->Title&&$request->Video&&$request->Course_id)){
            return redirect()->route('Video.create');
        }

        $vi=$request->file('Video')->getClientOriginalName();
        $path=$request->file('Video')->storeAs('Course_Videos',$vi,'public');
        
        Video::create([
            'Title'=>$request->Title,
            'Video_Url'=>$path,
            'Course_id'=>$request->Course_id
        ]);

        return redirect()->route('Video.create');
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
    public function edit($id)
    {
        $Video=Video::findorFail($id);
        return view('Admin.editVideo',compact('Video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $vi=$request->file('Video')->getClientOriginalName();
        $path=$request->file('Video')->storeAs('Course_Videos',$vi,'public');
        
        Video::findorFail($id)->update([
            'Title'=>$request->Title,
            'Video_Url'=>$path,
            'Course_id'=>$request->Course_id
        ]);

        return redirect()->route('Video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::findorFail($id)->delete();
        return redirect()->route('Video.index');
    }
}
