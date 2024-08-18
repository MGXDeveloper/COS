<form action="{{route('Comment.update',$comment->id)}}" method="POST" >
    @method('PUT')
    @csrf

    <input type="number" name="Video_id" placeholder="Enter the id of Course" value={{$comment->Video_id}}><br><br>
    <input type="text" name="Body" placeholder="Enter the Comment" value={{$comment->Body}}><br><br>
    <input type="submit" value="Update">

</form>