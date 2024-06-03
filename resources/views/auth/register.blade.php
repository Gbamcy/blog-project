@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-4">
               <h4 class="mb-3" style="color: #fff;">Register</h4>
               <form method="POST" action="{{ route('register') }}">
                   @csrf
                   <div class="row mb-3">

                       <div class="col-md-6">
                           <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                           @error('name')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                       </div>
                   </div>
                   <div class="row mb-3">

                       <div class="col-md-6">
                           <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                           @error('email')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                       </div>
                   </div>

                   <div class="row mb-3">

                       <div class="col-md-6">
                           <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                           @error('password')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                       </div>
                   </div>

                   <div class="row mb-3">

                       <div class="col-md-6">
                           <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       </div>
                   </div>

                   <div class="row mb-0">

                       <div class="col-md-6">
                           <button type="submit" class="btn btn-block btn-primary">Register</button>

                       </div>
                   </div>
               </form>
            <p style="color: #fff;">Already have an account?.<a href="{{route('login')}}"> Login</a></p>
        </div>
    </div>
</div>
@endsection
