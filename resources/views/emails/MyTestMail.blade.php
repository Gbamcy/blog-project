@extends('layouts.master')
@section('title','mail view')
@section('content')
    <div>
        <h5>sending Email</h5>
        <h6>{{ $details['title'] }}</h6>
        <p>{{ $details['body'] }}</p>

        <p>Thank you</p>
    </div>

@endsection



