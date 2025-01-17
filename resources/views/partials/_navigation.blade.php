<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><span class="my">My</span><span class="blog">Blog</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ---right " style="margin-left: 70%;">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('profile')}}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">logout</a>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>
            @endif

        </ul>

    </div>
</nav>
