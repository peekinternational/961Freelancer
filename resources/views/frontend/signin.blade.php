@extends('frontend.layouts.app')
@section('content')
<section class="login-signup">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<div class="login-signup-wrapper login-wrapper">
					<div class="login-signup-header border-bottom">
						<h3 class="text-center">Login to 961 Freelancer</h3>
						<!-- <p class="text-center">Don't have an account? <a href="{{ route('register')}}">Sign Up</a></p> -->
					</div>
					<div class="login-with-credentials">
						<form action="" method="POST">
							<div class="mb-3">
								<label class="control-label">Username or Email</label>
								<input class="form-control" type="text" placeholder="Enter Username or Email" name="seller_user_name" value="">
								<!--  -->
								<span class="form-text text-danger"></span>
							</div>
							<div class="mb-3">
								<label class="control-label">Password</label>
								<input class="form-control" type="password" name="seller_pass" value="" placeholder="Enter Password">
								<!--  -->
								<span class="form-text text-danger"></span>
							</div>
							<div class="mb-3 d-flex flex-row align-items-center justify-content-between">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="remember" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Remember me</label>
									<!--  -->
								</div>
								<a class="fogot-password" href="javascript:void(0);" data-toggle="modal" data-target="#forgot-modal" data-dismiss="modal">Forgot password?</a>
							</div>
							<div class="mb-3">
								<button class="login-button text-white w-100" role="button" type="submit" name="login">Sign in</button>
							</div>
						</form>
						<div class="divider">
							<p><span>or</span></p>
						</div>
					</div>
					
					<div class="login-by-social d-flex flex-column align-items-center justify-content-center">
						<a class="social-button facebook d-flex flex-row align-items-center" href="javascript:void(0);" onclick="window.location='https://www.facebook.com/v2.10/dialog/oauth?client_id=2583252321940651&amp;state=46c82a7ef8d2b02ea5cdc1eca1db5f90&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fwww.emongez.com%2Ffb-callback&amp;scope=email';">
							<span>
								<i class="fab fa-facebook-f"></i>
							</span>
							<span>Login with Facebook</span>
						</a>
						<!-- <a class="social-button linkedin d-flex flex-row align-items-center" href="javascript:void(0);">
							<span>
								<i class="fab fa-linkedin-in"></i>
							</span>
							<span>Login with Linkedin</span>
						</a> -->
						<a class="social-button google d-flex flex-row align-items-center" href="javascript:void(0);" onclick="window.location = 'https://accounts.google.com/o/oauth2/auth?response_type=code&amp;access_type=online&amp;client_id=38973601958-d3ujd0ivcm8b5ihkhrspdi37024cmjm1.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwww.emongez.com%2Fg-callback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;approval_prompt=auto';">
							<span>
								<i class="fab fa-google"></i>
							</span>
							<span>Login with Google</span>
						</a>
					</div>
					<div class="login-signup-header">
						<p class="text-center">Don't have an account? <a href="{{ route('register')}}">Sign Up</a></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection