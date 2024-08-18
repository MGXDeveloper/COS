@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

@section('contain')
    
<form action="{{route('Course.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf

    <input type="text" name="Name" placeholder="Enter the name of Course" required ><br><br>
    <input type="text" name="Teacher" placeholder="Enter the name of Teacher" required ><br><br>
    <input type="number" name="Hours" placeholder="Enter the number of Course" required ><br><br>
    <input type="file" name="Image" placeholder="Enter the image of Course" required ><br><br>
    <input type="submit" value="Save">

</form>

@endsection  
