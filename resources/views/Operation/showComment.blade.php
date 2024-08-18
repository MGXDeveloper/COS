<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Body</th>
        <th scope="col">Video_id</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comments as $comment)
      <tr>
        <th scope="row">1</th>
        <td>{{$comment->id}}</td>
        <td>{{$comment->Body}}</td>
        <td>{{$comment->Video_id}}</td>
    
        <td>
            <form action="{{route('Operation.LikeComment')}}" method="POST">
              @csrf
        
              <input type="hidden" name="Comment_id" value="{{$comment->id}}">
              <button type="submit">Like</button>
            </form>
          </td>
        

      </tr>
      @endforeach  
      
      
    </tbody>


</table>