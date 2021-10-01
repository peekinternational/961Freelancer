@extends('frontend.layouts.app')
@section('title', 'Change Password')
@section('styling')
@endsection
@section('content')
<div class="container">
  <!-- <div class="outer-box left-side">
    <div class="inner-box">
      <div class="img-container">
        <img src="{{asset('images/sign-up-bg.jpg')}}" alt="">
      </div>

      <div class="logo-and-text">
        <img src="{{asset('images/logo-white.svg')}}" alt="">
        <p>Find The Perfect Services
          with Engezly For Your Business</p>
      </div>
    </div>
  </div> -->
  <div class="row outer-box right-side d-flex justify-content-center my-5 py-4">
    <div class="inner-box col-md-4 shadow p-3 rounded login-with-credentials">
      @if(Session::has('verify'))
      <div class="alert alert-success">
        {{ Session::get('verify') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(Session::has('resetAlert'))
      <div class="alert alert-danger">
        {{ Session::get('resetAlert') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      
      @if(Session::has('resetSuccess'))
      <div class="alert alert-success">
        {{ Session::get('resetSuccess') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 30px;margin-top: 59px;color: black;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <form action="{{ url('/reset-password') }}" method="post" class="form">
        @csrf
        <h4 class="text-center mb-3">Change Your Password</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <!-- <p class="reset-text">Please enter your phone number and you will receive a link to reset your password</p> -->
        <input type="hidden" value="{{ $usersData->id }}" name="user_id">
        <div class="form-group mb-3">
          <label for="">Password</label>
          <input type="password" class="form-control" id="current-password" name="password" placeholder="">
          @if ($errors->has('current-password'))
          <span class="help-block">
            <strong>{{ $errors->first('current-password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group mb-3">
          <label>Confirm Password</label>

          <input type="password" class="form-control" id="confirm_pass" name="confirm_password" required>

          @if ($errors->has('new-password'))
          <span class="help-block">
            <strong>{{ $errors->first('new-password') }}</strong>
          </span>
          @endif
          <span id="match" class="pl-3"></span>
        </div>

        <div class="btn-container">
          <button type="submit" class="btn login-button w-100 text-white">Reset Password</button>
        </div>

        <p class="account-btn mt-3 text-center">Back to <a href="{{url('login')}}">Sing in</a></p>

      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  $('#confirm_pass').on('keyup', function () {
    if ($('#current-password').val() == $('#confirm_pass').val()) {
      $('#match').html('Password Match').css('color', 'green');
    } else 
      $('#match').html('Password Not Matching').css('color', 'red');
  });
</script>
@endsection
