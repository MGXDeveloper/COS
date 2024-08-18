<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Course_id</th>
        <th scope="col">Video_Url</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($videos as $video)
      <tr>
        <th scope="row">1</th>
        <td>{{$video->id}}</td>
        <td>{{$video->Title}}</td>
        <td>{{$video->Course_id}}</td>
        <td>{{$video->Video_Url}}</td>
    
        <td><a href="{{route('Video.edit',$video->id)}}">Edit</a></td>
        
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