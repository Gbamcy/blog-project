@extends('layouts.master')
@section('title','Edit post')
@section('content')
    <div class="container mt-4">

        <div class="jumbotron">
            <button class="btn btn btn-default" style="color: #fff;" ><a href="{{url('/posts')}}">Back</a></button>
            <div class="row  justify-content-center align-items-center ">
                <div class="col-lg-10">

                    <form action="{{route('posts.update', ['id' => $post->id])}}" method="Post">
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
                            <input type="text" class="form-control" name="title" placeholder="Enter title" value="{!! $post->title !!}" required>

                        </div>

                        <div class="form-control">
                            <textarea type="text" name="body" class="form-control" required placeholder="Description"  {!! $post->body !!}"></textarea>
                        </div>

                        <div class="form-control">

                            <button type="submit" class="btn btn-block btn-secondary">Post</button>
                        </div>
                        <p class="feedback">Feel free to ask me any question.

                     </form>


                </div>

            </div>

        </div>
    </div>
@endsection

