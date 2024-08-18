@extends('Operation.layouts.navbar')

@section('second_title')
{{ __('Videos') }}
@endsection

@section('contain')
<div class="container">
    <h2>Videos</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col">Title</th>
                <th scope="col">Video URL</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
            <tr>
                
                <td>{{$video->Title}}</td>
                <td>{{$video->Video_Url}}</td>
                <td>
                    <form action="#" method="POST">
                        @csrf
                        <input type="hidden" name="Video_id" value="{{$video->id}}">
                        <button type="reset" class="btn btn-success">Download</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Operation.showVideo')}}" method="POST">
                        @csrf
                        <input type="hidden" name="Video_id" value="{{$video->id}}">
                        <button type="submit" class="btn btn-primary">Show</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
