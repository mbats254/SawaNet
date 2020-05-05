@extends('layouts.beforeauth')

@section('content')




		<div class="flexslider progression-studios-slider">
	      <ul class="slides">
				<li class="progression_studios_animate_in">
					<div class="progression-studios-slider-image-background" style="background-image:url(images/demo/landing.jpg);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">

								<div class="container">

									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2 style="color:#3db13d;">Welcome to DOCUBOX CINEMA<span style="color:#3db13d;">.</span></h2>
											<h6 style="color: white;">Watch our collection of short films and documentaries by African filmmakers!</h6>
											<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro" href="signup-step2.html" role="button">Click here to start</a>
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->

								</div><!-- close .container -->

							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->

						<div class="progression-studios-slider-mobile-background-cover"></div>
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
			</ul>
		</div><!-- close .progression-studios-slider - See /js/script.js file for options -->


		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; Copyright 2020 DOCUBOX. All Rights Reserved</div>
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


		@endsection
