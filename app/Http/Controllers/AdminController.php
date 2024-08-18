<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\subscrip;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        return view('Admin.Dashboard');
    }

    public function Profile(){
        return view('profile.show');
    }

    public function Add_Video(){
        return view('Admin.Add_Video');
    }

    public function updateVideo(Request $request)
    {
        $request->validate([
            'Title'=>'required',
            'Course_id'=>'required',
            'Video'=>'required'
        ]);


        $vi=$request->file('Video')->getClientOriginalName();
        $path=$request->file('Video')->storeAs('Course_Videos',$vi,'public');
        
        Video::findorFail($request->Video_id)->update([
            'Title'=>$request->Title,
            'Video_Url'=>$path,
            'Course_id'=>$request->Course_id
        ]);

        return $this->showVideos_of_Course($request);
    }

    public function showVideos_of_Course(Request $request){
        $videos=Video::where('Course_id',$request->Course_id)->get();
        return view('Admin.showVideos_of_Course',compact('videos'));
    }

    public function Subscriptions(Request $request){
        $subscrips=subscrip::where('Course_id',$request->Course_id)->get();
        $userIds = $subscrips->pluck('User_id')->toArray();
        $users=User::whereIn('id',$userIds)->get();
        return view('Admin.Subscriptions',compact('users'));
    }


    public function showAllComment()
    {
        $comments=Comment::all();
        return view('Admin.showAllComment',compact('comments'));
    }


    public function showComments_of_Video(Request $request){
        $comments=Comment::where('Video_id',$request->Video_id)->get();
        return view('Admin.showComments_of_Video',compact('comments'));
    }


    public function destroy_Comment(Request $request)
    {
        Comment::findorFail($request->comment_id)->delete();

        return $this->showComments_of_Video($request);
    }

}
