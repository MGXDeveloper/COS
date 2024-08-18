<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\subscrip;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(){
        $courses=Course::all();
        return view('Operation.index',compact('courses'));
    }

    public function Subscriptions(){
        $subscrips=subscrip::where('User_id',auth()->user()->id)->get();
        $courseIds = $subscrips->pluck('Course_id')->toArray();
        $courses=Course::whereIn('id',$courseIds)->get();
        return view('Operation.Subscriptions',compact('courses'));
    }

    public function subscrip(Request $request)
    {
        subscrip::create([
            'User_id'=>auth()->user()->id,
            'Course_id'=>$request->Course_id
        ]);

        return $this->index();
    }

    public function LikeVideo(Request $request)
    {
        $video=Video::where('id',$request->Video_id)->first();
        if($video){
            $video->Like=$video->Like+1;
            $video->save();
        }

        return $this->showVideo($request);
     
    }

    public function LikeComment(Request $request)
    {
        $comment=Comment::where('id',$request->Comment_id)->first();
        if($comment){
            $comment->Like=$comment->Like+1;
            $comment->save();
        }
        
    }

    public function showAllVideos(Request $request){
        $videos=Video::where('Course_id',$request->Course_id)->get();
        return view('Operation.showAllVideos',compact('videos'));
    }

    public function showVideo(Request $request){
        $video=Video::findorFail($request->Video_id);
        $comments=Comment::where('Video_id',$request->Video_id)->get();
        return view('Operation.showVideo',compact('video','comments'));
    }

    public function showComment(Request $request){
        $comments=Comment::where('Video_id',$request->Video_id)->get();
        return view('Operation.showComment',compact('comments'));
    }
}
