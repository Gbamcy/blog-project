@extends('layouts.master')
@section('title','contact')
@section('content')
   <div class="container">
       <div class="row my-5 mt-4">
           <div class="col-lg-6 ">
               <div class="card-header">
                   <h3 class="text-center_1">Give me a <span class="give">feedback</span> </h3>
                   <div class="card-body">
                       @foreach ($errors->all() as $error)
                           <p class="alert alert-danger">{{ $error }}</p>
                       @endforeach
                           @if (session('status'))
                               <div class="alert alert-success">
                                   {{ session('status') }}
                               </div>
                           @endif
                       <form action="{{route('pages.contact')}}" method="Post">

                           @csrf
                           <div class="form-group">

                               <input type="text" name="name" class="form-control"  placeholder="Enter Name" value="{{ old('name') }}" required>

                           </div>
                           <div class="form-group">

                               <input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}" required>

                           </div>
                           <div class="form-group">

                               <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ old('emails') }}" required>

                           </div>
                           <div class="form-group">

                               <textarea type="text" name="content" class="form-control" placeholder="What's on your mind..?" required></textarea>

                           </div>
                           <p>Feel free to ask me any question..</p>
                           <div class="form-group">

                               <button type="submit" class="btn btn-block  btn-secondary">Send message</button>

                           </div>

                       </form>

                   </div>

               </div>

           </div>
           <div class="col-lg-6 bg-secondary " id="map">
               <p><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=opposite uba bank ,FHa lugbe, Abuja&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanox.io/">Gacha Nox APK</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div></p>

           </div>


       </div>

   </div>

@endsection
