@extends('Admin.layouts.head')
@extends('Admin.layouts.navbar')

<!--////////////////////////Dont Worke//////////////////////////////////-->
@section('operator')
    <form action="#" method="GET">
      <input type="submit" name="Add Student" value="Add Student">
    </form>
@endsection
<!--/////////////////////////////////////////////////////////////////////-->

@section('contain')
<table class="table table-dark table-striped">
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role}}</td>
        

      </tr>
      @endforeach  
      
      
    </tbody>


</table>
@endsection  
