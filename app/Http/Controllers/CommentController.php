<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\OperationController;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments=Comment::all();
        return view('Comment.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->Body)){
            return app(OperationController::class)->showVideo($request);
        }

        Comment::create([
            'Video_id'=>$request->Video_id,
            'Body'=>$request->Body,
            'User_id'=>auth()->user()->id
        ]);

        //return redirect()->route('Comment.create');
        return app(OperationController::class)->showVideo($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment=Comment::findorFail($id);
        return view('Comment.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Comment::findorFail($id)->update([
            'Video_id'=>$request->Video_id,
            'Body'=>$request->Body
        ]);

        return redirect()->route('Comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::findorFail($id)->delete();

        return redirect()->route('Comment.index');
    }
}
