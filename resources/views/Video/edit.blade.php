<form action="{{route('Video.update',$Video->id)}}" method="POST"  enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <input type="number" name="Course_id" placeholder="Enter the id of Course" value="{{$Video->Course_id}}"><br><br>
    <input type="text" name="Title" placeholder="Enter the Title of Video" value="{{$Video->Title}}"><br><br>
    <input type="file" name="Video" placeholder="Enter the Video of Course" value="{{$Video->Video_Url}}"><br><br>
    <input type="submit" value="Update">

</form>