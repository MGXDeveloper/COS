<form action="{{route('Course.update',$course->id)}}" method="POST"  enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <input type="text" name="Name" placeholder="Enter the name of Course" value={{$course->Name}} ><br><br>
    <input type="text" name="Teacher" placeholder="Enter the name of Teacher" value={{$course->Teacher}} ><br><br>
    <input type="number" name="Hours" placeholder="Enter the number of Course" value={{$course->Hours}} ><br><br>
    <input type="file" name="Image" placeholder="Enter the image of Course" value={{$course->Image}} ><br><br>
    <input type="submit" value="Update">

</form>