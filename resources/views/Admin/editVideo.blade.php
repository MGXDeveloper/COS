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

    <form action="{{ route('Admin.updateVideo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="Video_id" value="{{ $Video->id }}">

        <div class="form-group">
            <label for="course_id">Course ID:</label>
            <input type="number" class="form-control" id="course_id" name="Course_id" value="{{ $Video->Course_id }}" required >
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="Title" value="{{ $Video->Title }}" required >
        </div>

        <div class="form-group">
            <label for="video">Video:</label>
            <input type="file" class="form-control-file" id="video" name="Video" required >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
