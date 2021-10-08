<header>
  <div class="home-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-3 d-flex flex-row">
          <div class="logo">
            <a class="logo-1" href="{{ url('/')}}"><img src="{{ asset('assets/images/logo.png') }}" width="150"></a>
            <a class="home-logo" href="{{ url('/')}}"><img src="{{ asset('assets/images/logo.png') }}" alt="961 Freelancer" width="150"></a>
            
          </div>
        </div>
        <div class="col-6 col-md-9">
          <div class="header-right d-flex align-items-center justify-content-end">
            <div class="menu-inner">
              <ul class="mb-0">
                <li><a href="">Home</a></li>
                <li><a href="">How it Works</a></li>
                <li><a href="{{ route('job.index') }}">Browse Jobs</a></li>
                <li><a href="{{ route('freelancers.index') }}">Browse Freelancers</a></li>
              </ul>
            </div>
            @if(Auth::user() == '')
            <div class="Login-button">
              <a href="{{ route('login') }}">Login</a>
              <a href="{{ route('register') }}">Join Now</a>
            </div>
            @else
            <div class="wt-userlogedin d-none {{ Auth::user()->account_type === "Freelancer" ? "d-sm-block" : "d-sm-flex align-items-center" }}">
              <figure class="wt-userimg">
                @if(Auth::user()->profile_image != '')
                  <img src="{{asset('assets/images/user/profile/'.Auth::user()->profile_image)}}" alt="img description">
                @else
                  <img src="{{asset('assets/images/user-login.png')}}" alt="img description">
                @endif
              </figure>
              <div class="wt-username">
                <h3 class="mb-0">{{Auth::user()->username}}</h3>
                @if(Auth::user()->account_type != 'Client')
                <span class="pt-1">{{Auth::user()->tagline}}</span>
                @endif
              </div>
              <nav class="wt-usernav">
                <ul>
                  <li>
                    <a href="{{url('profile')}}">
                      <span>My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('logout')}}">
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            @endif
            <div class="menubar">
              <div class="d-flex flex-row align-items-center">
                <div class="image">
                  <img src="" alt="">
                  <img src="" alt="">
                </div>
                <div class="icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End New Design -->
<!-- Offcanvas-menu -->
<div class="ofcanvas-menu pre-login">
  <div class="close-icon">
    <i class="fal fa-times"></i>
  </div>
  @if(Auth::user() != '')
  <div class="profile-inner text-center">
    @if(!empty(Auth::user()->profile_image))
    <img src="{{asset('assets/images/user/profile/'.Auth::user()->profile_image)}}" width="100px" height="100px" class="img-fluid rounded-circle mb-3" alt="">
    @else
    <img src="{{asset('assets/images/user-login.png')}}"  class="img-fluid rounded-circle mb-3" width="100px" height="100px">
    @endif
    <h4>Welcome back, <span>{{Auth::user()->username}}</span></h4>
  </div>
  @endif
  <div class="canvs-menu">
    <ul class="d-flex flex-column mb-0">
      <li>
        <a href="">Post A Job</a>
      </li>
      <li>
        <a href="">How it Works</a>
      </li>
      @if(Auth::user() != '')
      <li>
        <a href="{{url('profile')}}">Profile</a>
      </li>
      <li>
        <a href="{{route('logout')}}">Logout</a>
      </li>
      @endif
      @if(Auth::user() == '')
      <li class="mb-4">
        <a class="button login-button" href="{{ route('login') }}">Login</a>
      </li>
      <li>
        <a class="button join-button" href="{{ route('register') }}">Join Now</a>
      </li>
      @endif
    </ul>
  </div>
</div>
<!-- Close-overlay -->
<div class="overlay-bg"></div>
<!-- Offcanvas-menu END-->