<form action="{{route('Comment.store')}}" method="POST" >
    @csrf

    <input type="number" name="Video_id" placeholder="Enter the id of Course"><br><br>
    <input type="text" name="Body" placeholder="Enter the Comment"><br><br>
    <input type="submit" value="Save">

</form>