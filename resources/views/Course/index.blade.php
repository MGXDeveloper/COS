<table class="table table-dark table-striped">
    
        <thead>
          <tr>
            <th scope="col">#</th>
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
            <th scope="row">1</th>
            <td>{{$course->id}}</td>
            <td>{{$course->Name}}</td>
            <td>{{$course->Teacher}}</td>
            <td>{{$course->Hours}}</td>
            <td>{{$course->Image}}</td>
            <td><a href="{{route('Course.edit',$course->id)}}">Edit</a></td>
            
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