@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('operator')
    <form action="{{route('Course.create')}}" method="GET">
      <input type="submit" name="Create Course" value="Create Course">
    </form>
@endsection

@section('contain')
<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Teacher</th>
        <th scope="col">Hours</th>
        <th scope="col">Image</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($courses as $course)
      <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->Name}}</td>
        <td>{{$course->Teacher}}</td>
        <td>{{$course->Hours}}</td>
        <td>{{$course->Image}}</td>
        <td><a href="{{route('Course.edit',$course->id)}}">Edit</a></td>

        <td>
          <form action="{{route('Admin.showVideos_of_Course')}}" method="POST">
            @csrf
            <input type="hidden" name="Course_id" value="{{$course->id}}">
            <button type="submit">Show</button>
          </form>
        </td>

        <td>
          <form action="{{route('Admin.Subscriptions')}}" method="POST">
            @csrf
            <input type="hidden" name="Course_id" value="{{$course->id}}">
            <button type="submit">Subscriptions</button>
          </form>
        </td>
        
        <td>
          <form action="{{route('Course.destroy',$course->id)}}" method="POST">
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
