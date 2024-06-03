
@extends('layouts.master')
@section('title', 'View all tickets')
@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h4>..Welcome Admin..!</h4>
                <hr>
                <h5 class="float-left">Posts</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if ($posts->isEmpty())
                    <p> There is no post.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>body</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }} </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td><a class="{{route('posts.edit')}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

@endsection
