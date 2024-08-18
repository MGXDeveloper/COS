<!-- Sidebar-->
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">
        <a class="logo" href="/"><img src="{{asset('assets/images/logo.png')}}" width="50px" height="50px" style="margin-top: 3%" ></a>
        Start Bootstrap
    </div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Course.index')}}">Courses</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Video.index')}}">Videos</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Admin.showAllComment')}}">Comment</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
    </div>
</div>