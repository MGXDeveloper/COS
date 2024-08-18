<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('Admin.showAllCourse',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.createCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Image'=>'required',
            'Teacher'=>'required',
            'Hours'=>'required'
        ]);

        $im=$request->file('Image')->getClientOriginalName();
        $path=$request->file('Image')->storeAs('Course_images',$im,'public');
        
        Course::create([
            'Name'=>$request->Name,
            'Image'=>$path,
            'Teacher'=>$request->Teacher,
            'Hours'=>$request->Hours
        ]);

        return view('Admin.createCourse');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::findOrFail($id);
        return view('Admin.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'Name'=>'required',
            'Image'=>'required',
            'Teacher'=>'required',
            'Hours'=>'required'
        ]);

        $im=$request->file('Image')->getClientOriginalName();
        $path=$request->file('Image')->storeAs('Course_images',$im,'public');
        
        Course::findOrFail($id)->update([
            'Name'=>$request->Name,
            'Image'=>$path,
            'Teacher'=>$request->Teacher,
            'Hours'=>$request->Hours
        ]);

        return redirect()->route('Course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::findorFail($id)->delete();

        return redirect()->route('Course.index');
    }
}
