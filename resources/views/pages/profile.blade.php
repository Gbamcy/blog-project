@extends('layouts.master')
@section('title','profile')
@section('content')

    <div class="container col-lg-10 col-lg-offset-2 mt-4  bg-dark" id="profile">
        <div class="row">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{url('/image/full.jpg')}}" alt="Avatar" style="width:200px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <img src="{{('/image/suit.jpg')}}" alt="" style="width:300px; height: 200px;">
                    </div>
                </div>
            </div>

            <div class="col-md-8 float-md-right bg-dark">
                <h4><span class="about">About </span><span class="me"> Me</span> </h4>
                <hr class="line">
                <h6>Web Developer</h6>
                <p>I'm a php developer, i'design and develop responsive and interactive websites.<br>
                   A responsive design makes your websites accessible to  users,regardless of their devices.
                </p>

                <div class="talk">
                    <button class="btn btn-danger" id="my-text">Let's Talk</button>
                </div>

                <p><span class="tech">Tech </span><span class="stack"> Stack</span> </p>
                <ul class="pack">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>PHP</li>
                    <li>Jquery</li>
                    <li>Github</li>
                    <li>Mysql</li>
                    <li>Javascript</li>
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                </ul>

                <div class="biodata float-md-right">
                    <h6><span class="bio">Bio</span><span class="data">-data</span></h6>
                   <ul class="biodata_list">
                       <li>State of Origin : <i> Benue State</i></li>
                       <li>Date of Birth : <i> 21<sup>st</sup>November</i></li>
                       <li>Marital Status : <i> Single</i> </li>
                       <li>Qualification :  <i >Degree</i></li>
                       <li>Email : <i> Ushabeks@gmail.com</i></li>
                       <li>Mobile : <i> +2347032146138</i></li>
                   </ul>

                </div>

                <div class="next float-left">
                    <h5><span class="project">Projects</span><span> Completed</span></h5>
                    <ul class="complete">
                        <li>Blog</li>
                        <li>Tac Nigerian Limited Website</li>
                        <li>Portfolio etc.</li>
                    </ul>
                    <p class="sentence"><marquee >....Just a drop of water in the ocean, more projects on the way..!!</marquee></p>
                </div>

            </div>

        </div>
    </div>

@endsection

