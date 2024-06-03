@extends('layouts.master')
@section('title','home page')
@section('content')
   <div class="container">

       <div class="jumbotron mt-4 " style="width: 100%; height:10%;">

           <h2 class="header"><marquee id="move">..Welcome to my  blog..!</marquee></h2>
           <hr>
           <p id="jumbotron"><b>My blog page with many articles, click the button below to see them.</b></p>
           <p class="lead">
               <a class="btn btn-info btn-lg" href="{{route('posts.index')}}" id="button" role="button">Create Posts</a>
           </p>
       </div>

       <div class="jumbotron">
           <div class="row" id="welcome">
               <div class="col-md-8 " id="services">
                       <h5>Services</h5>

                       <ul class="others">
                           <p>In this blog, i shared tutorial based on web design and development.<br> We also offer services such as;</p>
                           <li class="others">Bootcamp</li>
                           <li class="others">Trainings</li>
                           <li class="others">Internship</li>
                           <li class="others">Mentorship</li>
                       </ul>
               </div>

               <hr>
               <div class="col-md-4 bg-danger " id="red">
                   <h5>Web Development</h5>
                   <p>Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great,<br> work fast and perform well with a seamless user experience.</p><button class="btn btn-default">Read more..</button>
               </div>
               <hr>
               <div class="col-md-8 " id="design">
                   <h5>Web Design</h5>
                   <p> Web designing is the process of planning, conceptualizing, and implementing the plan for designing a website in a way that is functional and offers a good user experience.</p>
                       <button class="btn bnt bg-default">Read more..</button>
               </div>
               <hr>
           </div>

       </div>

   </div>
@endsection





