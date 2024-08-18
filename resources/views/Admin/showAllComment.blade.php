@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('contain')
<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Body</th>
        <th scope="col">User_id</th>
        <th scope="col">Video_id</th>
        <th scope="col">Like</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comments as $comment)
      <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->Body}}</td>
        <td>{{$comment->User_id}}</td>
        <td>{{$comment->Video_id}}</td>
        <td>{{$comment->Like}}</td>
    
        <td><a href="{{route('Comment.edit',$comment->id)}}">Edit</a></td>
        
        <td>
          <form action="{{route('Comment.destroy',$comment->id)}}" method="POST">
            @method('Delete')
            @csrf
            <button type="submit">Delete</button>
          </form>
        </td>

      </tr>
      @endforeach  
      
      
    </tbody>


</table>
@endsection  
