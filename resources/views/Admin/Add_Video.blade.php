@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('styles')
<style>
    .form-group {
        margin-bottom: 20px;
    }
</style>
@endsection

@section('contain')
<div class="container">
    <h2>Edit Video</h2>

    <form action="{{ route('Video.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="course_id">Course ID:</label>
            <input type="number" class="form-control" id="course_id" name="Course_id"  required >
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="Title"  required >
        </div>

        <div class="form-group">
            <label for="video">Video:</label>
            <input type="file" class="form-control-file" id="video" name="Video" required >
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
