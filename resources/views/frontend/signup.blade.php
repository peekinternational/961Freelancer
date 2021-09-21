@extends('frontend.layouts.app')
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
            <form action="" method="POST" id="registerForm" novalidate="novalidate" class="bv-form">
              <div class="mb-3 has-error">
                <label class="control-label">Username</label>
                <input class="form-control" type="text" name="u_name" placeholder="Enter Your Username" value="" data-bv-field="u_name">
                <!-- <small class="form-text text-muted">Note: You will not be able to change username once your account has been created.</small>
                <span class="form-text text-danger" id="space_error"></span>
                <small class="help-block" data-bv-validator="regexp" data-bv-for="u_name" data-bv-result="INVALID" style="">Spaces or dots are not allowed in username.</small> -->
              </div>
              <div class="mb-3">
              	<label class="control-label">YOUR EMAIL ADDRESS</label>
              	<input class="form-control" type="email" name="email" placeholder="Enter Email" value="" data-bv-field="email">
              	<span class="form-text text-danger"></span>
              	<!-- <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small> -->
              </div>
          
              <div class="mb-3">
              	<label class="control-label">Phone No.</label>
              	<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Phone No." data-bv-field="phone">
              	<span class="form-text text-danger"></span>
              	<!-- <small class="help-block" data-bv-validator="regexp" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Only Numbers allowed.</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;"> The phone no. must be 8 or more characer.</small> -->
              </div>
                 
              <div class="mb-3 has-error">
              	<label class="control-label">Password</label>
              	<input class="form-control" type="password" name="pass" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" data-bv-field="pass">
              	<span class="form-text text-danger"></span>
              	<!-- <small class="help-block" data-bv-validator="regexp" data-bv-for="pass" data-bv-result="INVALID" style="">Please enter a value matching the pattern</small> -->
              </div>
              <div id="message" style="display: none;">
                <!-- <h3>Password must contain the following:</h3> -->
                <p id="letter" class="valid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="valid">A <b>number</b></p>
                <p id="length" class="valid">Minimum <b>8 characters</b></p>
              </div>
              <div class="mb-3">
              	<label class="control-label"> Confirm Password: </label>
              	<input type="password" class="form-control" id="confirm_pass" name="con_pass" placeholder="Confirm Password">
              	<span class="form-text text-danger"></span>
              	<span id="match" class="pl-3"></span>
              </div>
              <input type="hidden" class="form-control" name="referral" value="">
              <input type="hidden" name="timezone" value="300">
              
              <span class="form-text text-danger"></span>
              <!-- <div class="mb-3 d-flex flex-row align-items-center justify-content-between mb-0">
              	<div class="custom-control custom-checkbox">
              		<input type="checkbox" class="custom-control-input" name="term" id="terms">
              		<label class="custom-control-label" style="text-transform: none;" for="terms">I agree to the <a href="javascript:void(0);">Terms &amp; Conditions</a></label>
              	</div>
              </div> -->
              <span class="form-text text-danger"></span>
              <div class="mb-3">
              	<button class="login-button w-100 text-white" role="button" type="submit" name="register" disabled="disabled">Sign up</button>
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