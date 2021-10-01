@extends('frontend.layouts.app')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/intlTelInput.min.css')}}">
<style>
  .iti__divider,.iti__country{
    list-style: none;
  }
  .iti{
    width: 100%;
  }
</style>
@section('content')
<section class="login-signup">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<div class="login-signup-wrapper signup-wrapper">
          <div class="login-signup-header border-bottom">
            <h3 class="text-center">Sign Up to 961 Freelancer</h3>
            <!-- <p class="text-center">Already have an account? <a href="{{ route('login') }}">Log In</a></p> -->
          </div>
          <div class="login-with-credentials">
            <form action="{{url('/register')}}" method="POST" id="registerForm"  class="bv-form">
              @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
              @endif
              @csrf
              <div class="mb-3 has-error">
                <label class="control-label">Username</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Enter Your Username" value="">
                 <div class="invalid-feedback">
                   Please enter Username.
                </div>
                <!-- <small class="form-text text-muted">Note: You will not be able to change username once your account has been created.</small>
                <span class="form-text text-danger" id="space_error"></span>
                <small class="help-block" data-bv-validator="regexp" data-bv-for="u_name" data-bv-result="INVALID" style="">Spaces or dots are not allowed in username.</small> -->
              </div>
              <div class="mb-3">
              	<label class="control-label">YOUR EMAIL ADDRESS</label>
              	<input class="form-control" type="email" name="email" placeholder="Enter Email" value="" id="email">
              	<div class="invalid-feedback">
                    Please enter email.
                </div>
              </div>
          
              <div class="mb-3">
              	<label class="control-label">Phone No.</label>
              	<input class="form-control" type="text" name="mobile_number" id="phone" placeholder="Enter Phone No.">
              	<div class="invalid-feedback">
                  Please enter mobile.
                </div>
              </div>
                 
              <div class="mb-3 has-error">
              	<label class="control-label">Password</label>
              	<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
              	<div class="invalid-feedback">
                  Please enter password.
                </div>
              </div>
              <div class="mb-3">
              	<label class="control-label"> Confirm Password: </label>
              	<input type="password" class="form-control" id="confirm_pass" name="con_pass" placeholder="Confirm Password">
              	<span class="form-text text-danger"></span>
              	<span id="match" class="pl-3"></span>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <label class="control-label">ACCOUNT TYPE</label>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="customRadio1" class="custom-control custom-radio">
                      <input type="radio" hidden id="customRadio1" name="account_type" class="custom-control-input" value="Client">
                      <div class="custom-control-label">Client</div>
                    </label>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="customRadio2" class="custom-control custom-radio">
                      <input type="radio" hidden id="customRadio2" name="account_type" class="custom-control-input" value="Freelancer">
                      <div class="custom-control-label">Freelancer</div>
                    </label>
                  </div>
                </div>
                <div class="invalid-feedback">
                   Please select your account type.
                </div>
              </div>
              <div class="mb-3">
              	<button class="login-button w-100 text-white" type="submit" name="register">Sign up</button>
              </div>
            </form>
            <div class="divider">
            	<p><span>or</span></p>
            </div>
          </div>
          <div class="login-by-social d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <a class="social-button facebook d-flex flex-row align-items-center" href="javascript:void(0);" onclick="window.location = 'https://www.facebook.com/v2.10/dialog/oauth?client_id=2583252321940651&amp;state=46c82a7ef8d2b02ea5cdc1eca1db5f90&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fwww.emongez.com%2Ffb-callback&amp;scope=email';">
             	<span><i class="fab fa-facebook-f"></i></span>
             	<span>Sign up with Facebook</span>
            </a>
            <a class="social-button google d-flex flex-row align-items-center" href="javascript:void(0);" onclick="window.location = 'https://accounts.google.com/o/oauth2/auth?response_type=code&amp;access_type=online&amp;client_id=38973601958-d3ujd0ivcm8b5ihkhrspdi37024cmjm1.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwww.emongez.com%2Fg-callback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;approval_prompt=auto';">
              <span><i class="fab fa-google"></i></span>
              <span>Sign up with Google</span>
            </a>
          </div>
          <div class="login-signup-header">
            <!-- <h3 class="text-center">Sign Up to 961 Freelancer</h3> -->
            <p class="text-center">Already have an account? <a href="{{ route('login') }}">Log In</a></p>
          </div>
      	</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('script')
<script src="{{asset('assets/js/intlTelInput.min.js')}}"></script>
<script>
var phone_number = window.intlTelInput(document.querySelector("#phone"), {
  separateDialCode: true,
  hiddenInput: "full",
  utilsScript: "assets/js/utils.js"
});
  // var input = document.querySelector("#phone");
  // window.intlTelInput(input, {
  //   // allowDropdown: false,
  //   // autoHideDialCode: false,
  //   // autoPlaceholder: "off",
  //   // dropdownContainer: document.body,
  //   // excludeCountries: ["us"],
  //   // formatOnDisplay: false,
  //   // geoIpLookup: function(callback) {
  //   //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  //   //     var countryCode = (resp && resp.country) ? resp.country : "";
  //   //     callback(countryCode);
  //   //   });
  //   // },
  //   // hiddenInput: "full_number",
  //   // initialCountry: "auto",
  //   // localizedCountries: { 'de': 'Deutschland' },
  //   // nationalMode: false,
  //   // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  //   // placeholderNumberType: "MOBILE",
  //   // preferredCountries: ['cn', 'jp'],
  //   separateDialCode: true,
  //   utilsScript: "js/utils.js",
  // });

  $('#submit-btn').click(function(){
    var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
    $("input[name='whatsappNumber'").val(full_number);

    
    if($('#username').val() == ""){
      $('#username').addClass('is-invalid');
      $('#username').attr("required", "true");
    }else{
      $('#username').addClass('is-valid');
    }
    if($('#email').val() == ""){
      $('#email').addClass('is-invalid');
      $('#email').attr("required", "true");
    }else{
      $('#email').addClass('is-valid');
    }
    if($('#phone').val() == ""){
      $('#phone').addClass('is-invalid');
      $('#phone').attr("required", "true");
    }else{
      $('#phone').addClass('is-valid');
    }
    if($('#password').val() == ""){
      $('#password').addClass('is-invalid');
      $('#password').attr("required", "true");
    }else{
      $('#password').addClass('is-valid');
    }
    if($('input[name=""]').val() == ""){
      $('#password').addClass('is-invalid');
      $('#password').attr("required", "true");
    }else{
      $('#password').addClass('is-valid');
    }
  });

  var empty = $(".is-invalid").filter(function() { return !this.value; })
                                  .next(".invalid-feedback").show();
  $('#confirm_pass').on('keyup', function () {
    if ($('#password').val() == $('#confirm_pass').val()) {
      $('#match').html('Password Match').css('color', 'green');
    } else 
      $('#match').html('Password Not Matching').css('color', 'red');
  });
</script>
@endsection