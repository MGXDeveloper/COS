<form action="{{route('Video.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf

    <input type="number" name="Course_id" placeholder="Enter the id of Course"><br><br>
    <input type="text" name="Title" placeholder="Enter the Title of Video"><br><br>
    <input type="file" name="Video" placeholder="Enter the Video of Course"><br><br>
    <input type="submit" value="Save">

</form>