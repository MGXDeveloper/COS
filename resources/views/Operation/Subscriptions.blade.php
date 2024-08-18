@extends('Operation.layouts.navbar')

@section('styles')
<style>
    .card {
        background-color: #f5f5f5;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
    }
    
    .card-header {
        background-color: #007bff;
        color: #fff;
        padding: 16px;
    }
    
    .card-body {
        padding: 16px;
    }
    
    .course-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
    }
    
    .course-info {
        margin-bottom: 8px;
    }
    
    .course-image {
        width: 100%;
        height: auto;
        margin-bottom: 12px;
    }
    
    .enroll-btn {
        background-color: #4caf50;
        border: none;
        color: #fff;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .enroll-btn:hover {
        background-color: #45a049;
    }
</style>
@endsection

@section('second_title')
{{ __('Courses') }}
@endsection

@section('contain')
<div class="row">
    @foreach ($courses as $course)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('storage/'.$course->Image)}}" width="40" height="40" alt="Course Logo" style="vertical-align: middle; margin-right: 8px;">
                {{$course->Name}}
            </div>
            <div class="card-body">
                <div class="course-title">{{$course->Name}}</div>
                <div class="course-info">Teacher: {{$course->Teacher}}</div>
                <div class="course-info">Hours: {{$course->Hours}}</div>
                <img src="{{asset('storage/'.$course->Image)}}" class="course-image" alt="Course Image">
                <form class="form-inline" action="{{route('Operation.subscrip')}}" method="POST">
                    @csrf
                    <input type="hidden" name="Course_id" value="{{$course->id}}">
                    <button class="enroll-btn" type="submit">Subscribe</button>
                </form>
                <form class="form-inline" action="{{route('Operation.showAllVideos')}}" method="POST">
                    @csrf
                    <input type="hidden" name="Course_id" value="{{$course->id}}">
                    <button class="enroll-btn" type="submit">Show</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
