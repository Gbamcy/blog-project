@extends('layouts.master')
@section('title','create post')
@section('content')
<div class="container ">
    <div class="jumbotron mt-4">
        <div class="row  justify-content-center align-items-center ">
            <div class="col-lg-12">
                <form action="{{route('posts.store')}}" method="Post">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf

                    <div class="form-control">
                        <input type="text" class="form-control" name="title" placeholder="Post title" value="" required>
                    </div>
                    <div class="form-control">
                        <textarea type="text" name="body" id="myeditorinstance"  class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="form-control mb-2">
                        <button type="submit" class="btn btn-block btn-dark">Post</button>
                    </div>
                        <h5 class="feedback text-center">Recent posts </h5>

                </form>
                <div class="form-group" >
                    @if(count($posts))
                        @foreach($posts as $post)
                            <a class="text" href="{{route('posts.show', ['id' => $post->id])}}">
                                <div class="card" style="width:65.5rem;">
                                    <div class="card-header">
                                        <b>{!! $post->title !!}</b>

                                        <div class="card-body">
                                            {!! $post->body !!}
                                            <p><small class="small mt-5">Posted: {{ \carbon\Carbon::parse($post->created_at)->diffForHumans() }} </small></p>
{{--                                            <small class="small mt-5">Posted on: {{date('Mj,Yh:ia',strtotime($post->created_at))}}</small>--}}
                                        </div>
                                        <div class="card-footer">

                                        </div>

                                    </div>

                                </div>
                            </a>

                        @endforeach
                    @else
                        <p>There are no messages</p>
                    @endif

                </div>

            </div>

        </div>

    </div>
</div>
@endsection

