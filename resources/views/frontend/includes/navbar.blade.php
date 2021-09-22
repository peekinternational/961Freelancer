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
                <li><a href="{{ route('job-listings') }}">Browse Jobs</a></li>
                <li><a href="">Browse Freelancers</a></li>
              </ul>
            </div>
            <div class="Login-button">
              <a href="{{ route('login') }}">Login</a>
              <a href="{{ route('register') }}">Join Now</a>
            </div>
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
  <div class="canvs-menu">
    <ul class="d-flex flex-column mb-0">
      <li>
        <a href="">Post A Job</a>
      </li>
      <li>
        <a href="">How it Works</a>
      </li>
      </li>
      <li class="mb-4">
        <a class="button login-button" href="{{ route('login') }}">Login</a>
      </li>
      <li>
        <a class="button join-button" href="{{ route('register') }}">Join Now</a>
      </li>
    </ul>
  </div>
</div>
<!-- Close-overlay -->
<div class="overlay-bg"></div>
<!-- Offcanvas-menu END-->