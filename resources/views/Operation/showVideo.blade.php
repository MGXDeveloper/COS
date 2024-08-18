@extends('Operation.layouts.navbar')

@section('styles')
<style>
    .video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        height: 0;
    }
    
    .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }
    
    form {
        display: inline;
    }
    
    input[type="submit"] {
        padding: 5px 10px;
        background-color: #4caf50;
        border: none;
        color: white;
        cursor: pointer;
    }
    
    input[type="text"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .like-video-btn {
        float: right;
    }
</style>
@endsection

@section('contain')
<div class="container">
    <div class="video-container">
        <video controls>
            <source src="{{asset('storage/'.$video->Video_Url)}}" type="video/mp4">
        </video>
    </div>

    <h2>{{$video->Title}}</h2>

    <form action="{{route('Operation.LikeVideo')}}" method="POST" class="like-video-form">
        @csrf
        <input type="hidden" name="Video_id" value="{{$video->id}}">
        <button type="submit" class="btn btn-success like-video-btn">Like Video</button>
    </form>


    <form action="{{route('Comment.store')}}" method="POST">
        @csrf
        <input type="hidden" name="Video_id" value="{{$video->id}}">
        <div class="form-group">
            <label for="comment">Enter your comment:</label>
            <textarea class="form-control" rows="3" id="comment" name="Body" placeholder="Enter your comment" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Body</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
            <tr>
                <th scope="row">{{$comment->id}}</th>
                <td>{{$comment->Body}}</td>
                <td>
                    <form action="{{route('Operation.LikeComment')}}" method="POST">
                        @csrf
                        <input type="hidden" name="Comment_id" value="{{$comment->id}}">
                        <button type="submit" class="btn btn-success">Like</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection
