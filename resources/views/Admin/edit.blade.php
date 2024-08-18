@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('styles')
<style>
    form {
        max-width: 500px;
        margin: 0 auto;
    }
    
    input[type="text"],
    input[type="number"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #4caf50;
        border: none;
        color: white;
        cursor: pointer;
    }
</style>
@endsection

@section('contain')
    <form action="{{route('Course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" placeholder="Enter the name of the Course" value="{{$course->Name}}" required >

        <label for="teacher">Teacher:</label>
        <input type="text" id="teacher" name="Teacher" placeholder="Enter the name of the Teacher" value="{{$course->Teacher}}" required >

        <label for="hours">Hours:</label>
        <input type="number" id="hours" name="Hours" placeholder="Enter the number of hours" value="{{$course->Hours}}" required >

        <label for="image">Image:</label>
        <input type="file" id="image" name="Image" accept="image/*" required >

        <input type="submit" value="Update">
    </form>
@endsection
