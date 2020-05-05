@extends('layouts.beforeauth')

@section('content')

		<div id="content-pro">

  	 		<div class="container">
					<div class="centered-headings-pro pricing-plans-headings">
						<!-- <h6>For one low monthly price</h6> -->
						<h1>Instantly watch African Movies</h1>
					</div>
			</div><!-- close .container -->

			<div class="container">
				<ul id="registration-steps-pro">
					<li class="current-menu-item">
						<a href="signup-step2.html">
							<div class="registration-step-circle-icon"></div>
							<div class="registration-step-number">:)</div>
							<h5 class="registration-step-title">Create your account</h5>
						</a>
					</li>

				</ul>
				<div class="clearfix"></div>
			</div>


			<div id="pricing-plans-background-image">
				<div class="container">
						<div class="registration-steps-page-container">

	  					 <form class="" action='{{ route('register') }}' method='POST'>
                            @csrf
							 <div class="">

    	  						 <div class="form-group">

									 <label for="full-name" class="col-form-label">Full Name</label>
									<p style="display:none;color:red" id='non-existent'>Email not registered with us</p>
    	  							 <input type="text" name='name' class="form-control" required id="full-name" placeholder="John Doe">
    	  						 </div>
    	  						 <div class="form-group">
									 <label for="email" class="col-form-label">Email</label>
									<p style="display:none;color:red" id='non-existent'>Email not registered with us</p>
    	  							 <input type="text" name='email' class="form-control" id="email" required placeholder="jondoe@gmail.com">
    	  						 </div>
    	  						 <div class="form-group">
    								 <div class="row">
    									<div class="col">
										   <label for="password" class="col-form-label">Password</label>
									<p style="display:none;color:red" id='non-existent'>Email not registered with us</p>
    	  	  							 <input type="password" name='password' class="form-control" id="password" required placeholder="&middot;&middot;&middot;&middot;&middot;&middot;">
    									</div>
    									<div class="col">
										   <label for="confirm-password" class="col-form-label">&nbsp;</label>
									<p style="display:none;color:red" id='non-existent'>Email not registered with us</p>
    	  	  							 <input type="password" name='password_confirmation' class="form-control" id="confirm-password" required placeholder="Confirm Password">
										</div>

									 </div>

    	  						 </div>
								   <input type="submit" value='Submit' class="btn btn-green-pro">
                                </form>
                                   <div class="registration-social-login-or">or</div>

							 </div><!-- close .registration-social-login-container -->

							 {{-- <div class="registration-social-login-options">
							 	<h6>Sign up with one of your social accounts</h6>
								<div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
								<div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
								<div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
							 </div><!-- close .registration-social-login-options --> --}}

							 <div class="clearfix"></div>
	  						 <div class="form-group last-form-group-continue">
	  							 <!-- <a href="signup-step3.html" class="btn btn-green-pro">Continue</a> -->
								 <span class="checkbox-remember-pro"><input type="checkbox" id="checkbox-terms"><label for="checkbox-terms" class="col-form-label">By clicking "Continue", you agree to our <a href="#!">Terms of Use</a> and
<a href="#!">Privacy Policy</a> including the use of cookies.</label></span>
								 <div class="clearfix"></div>
	  						 </div>


						</div><!-- close .registration-steps-page-container -->

				</div><!-- close .container -->
			</div><!-- close #pricing-plans-background-image -->

		</div><!-- close #content-pro -->

		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; Copyright 2018 SKRN. All Rights Reserved</div>
					</div><!-- close .col -->
					<div class="col-md">
						<ul class="social-icons-pro">
							<li class="facebook-color"><a href="http://facebook.com/progressionstudios" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="twitter-color"><a href="http://twitter.com/Progression_S" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="youtube-color"><a href="http://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li class="vimeo-color"><a href="http://vimeo.com" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
						</ul>
					</div><!-- close .col -->
				</div><!-- close .row -->
			</div><!-- close .container -->
		</footer>

		<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>


		<!-- Modal -->
		@endsection
