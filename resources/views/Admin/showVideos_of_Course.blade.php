@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('operator')
    <form action="{{route('Admin.Add_Video')}}" method="POST">
      @csrf
      <input type="submit" name="Add Video" value="Add Video">
    </form>
@endsection

@section('contain')
<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Course_id</th>
        <th scope="col">Video_Url</th>
        <th scope="col">Like</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($videos as $video)
      <tr>
        <td>{{$video->id}}</td>
        <td>{{$video->Title}}</td>
        <td>{{$video->Course_id}}</td>
        <td>{{$video->Video_Url}}</td>
        <td>{{$video->Like}}</td>
    
        <td><a href="{{route('Video.edit',$video->id)}}">Edit</a></td>

        <td>
          <form action="{{route('Admin.showComments_of_Video')}}" method="POST">
            @csrf
            <input type="hidden" name="Video_id" value="{{$video->id}}">
            <button type="submit">Show</button>
          </form>
        </td>
        
        <td>
          <form action="{{route('Video.destroy',$video->id)}}" method="POST">
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
