
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->


		<title>THE BOX | CINEMA</title>
	</head>
	<body>
		<div id="sidebar-bg">

      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="dashboard-home.html"><img src="images/logo-video-layout.png" alt="Logo"></a></div>

			<div id="video-search-header">
				<div id="search-icon-more"></div>
				<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				<div id="video-search-header-filtering">
					<form id="video-search-header-filtering-padding">
						<div class="row">
							<div class="col-sm extra-padding">
								<h5>Type:</h5>

								<div class="row">
									<div class="col-sm">
										<label class="checkbox-pro-container">Movies
										  <input type="checkbox" checked="checked" id="movies-type">
										  <span class="checkmark-pro"></span>
										</label>

										<label class="checkbox-pro-container">TV Series
										  <input type="checkbox" id="tv-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
									<div class="col">
										<label class="checkbox-pro-container">New Arrivals
										  <input type="checkbox" id="movie-type">
										  <span class="checkmark-pro"></span>
										</label>

										<label class="checkbox-pro-container">Documentary
										  <input type="checkbox" id="documentary-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
								</div><!-- close .row -->

								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Genres:</h5>
								<select class="custom-select">
								  <option selected>All Genres</option>
								  <option value="1">Action</option>
								  <option value="2">Adventure</option>
								  <option value="3">Drama</option>
								  <option value="4">Animation</option>
								  <option value="5">Documentary</option>
								  <option value="6">Drama</option>
								  <option value="7">Horror</option>
								  <option value="8">Thriller</option>
								  <option value="9">Fantasy</option>
								  <option value="10">Romance</option>
								  <option value="11">Sci-Fi</option>
								  <option value="12">Western</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Country:</h5>
								<select class="custom-select">
								  <option selected>All Countries</option>
								  <option value="1">Argentina</option>
								  <option value="2">Australia</option>
								  <option value="3">Bahamas</option>
								  <option value="4">Belgium</option>
								  <option value="5">Brazil</option>
								  <option value="6">Canada</option>
								  <option value="7">Chile</option>
								  <option value="8">China</option>
								  <option value="9">Denmark</option>
								  <option value="10">Ecuador</option>
								  <option value="11">France</option>
								  <option value="12">Germany</option>
								  <option value="13">Greece</option>
								  <option value="14">Guatemala</option>
								  <option value="15">Italy</option>
								  <option value="16">Japan</option>
								  <option value="17">asdfasdf</option>
								  <option value="18">Korea</option>
								  <option value="19">Malaysia</option>
								  <option value="20">Monaco</option>
								  <option value="21">Morocco</option>
								  <option value="22">New Zealand</option>
								  <option value="23">Panama</option>
								  <option value="24">Portugal</option>
								  <option value="25">Russia</option>
								  <option value="26">United Kingdom</option>
								  <option value="27">United States</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding extra-range-padding">
								<h5>Average Rating:</h5>
				            <input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
								<!-- JS is under /js/script.jss -->
							</div><!-- close .col -->
						</div><!-- close .row -->
						<div id="video-search-header-buttons">
							<a href="#!" class="btn btn-green-pro">Filter Search</a>
							<a href="#!" class="btn">Reset</a>
						</div><!-- close #video-search-header-buttons -->
					</form><!-- #video-search-header-filtering-padding -->
				</div><!-- close #video-search-header-filtering -->
			</div><!-- close .video-search-header -->

			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<img src="images/demo/user-profile.jpg" alt="Suzie">
					<div id="header-username"></div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href="dashboard-profile.html"><span class="icon-User"></span>My Profile</a></li>
						{{-- <li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="dashboard-account.html"><span class="icon-Gears"></span>Account Details</a></li>
						<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li> --}}

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                           <input type="submit" class="icon-Power-3" value="Log Out">
                        </form>
                    </li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->

			<div id="header-user-notification">
				<div id="header-user-notification-click" class="noselect">
					<i class="far fa-bell"></i>
					<span class="user-notification-count">3</span>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-notification-menu">
					<h3>Notifications</h3>
					<div id="header-notification-menu-padding">
							<ul id="header-user-notification-list">
								<li><a href="#!"><img src="images/demo/user-profile-2.jpg" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-3.jpg" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-4.jpg" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
							</ul>
							<div class="clearfix"></div>
						</div><!-- close #header-user-profile-menu -->
					</div>
			</div><!-- close #header-user-notification -->



			<div class="clearfix"></div>

			<nav id="mobile-navigation-pro">

				<ul id="mobile-menu-pro">
	            <li class="current-menu-item">
	              <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
	                TV Series
	              </a>
	            <li>
	            <li>
	              <a href="dashboard-movies.html">
						<span class="icon-Reel"></span>
	                Movies
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-playlists.html">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-new-arrivals.html">
						<span class="icon-Movie-Ticket"></span>
	                New Arrivals
	              </a>
	            </li>
	            <li>
	              <a href="dashboard-coming-soon.html">
						<span class="icon-Clock"></span>
	                Coming Soon
	              </a>
	            </li>
	            <li>
	              <a href="#!">
						<i class="far fa-bell"></i>
						<span class="user-notification-count">3</span>
	                Notifications
	              </a>
	            </li>
				</ul>
				<div class="clearfix"></div>

				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				</div>

			</nav>

      </header>



		<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
            <ul id="vertical-sidebar-nav" class="sf-menu">
              <li class="normal-item-pro current-menu-item">
                <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
                  Documentary
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="dashboard-movies.html">
						<span class="icon-Reel"></span>
                  Movies
                </a>
              </li>

              <li class="normal-item-pro">
                <a href="dashboard-new-arrivals.html">
						<span class="icon-Movie-Ticket"></span>
                  Shorts, Shorts and Shots
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="dashboard-coming-soon.html">
						<span class="icon-Clock"></span>
                  Coming Soon
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>

		<main id="col-main">



			<div class="flexslider progression-studios-dashboard-slider">
		      <ul class="slides">
                  @foreach($films as $film => $values)
					<li class="progression_studios_animate_left">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url({!! $values->Film_Poster !!});">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">

									<div class="container">

										<a class="progression-studios-slider-play-btn afterglow"> <span class="wistia_embed wistia_async_hct8abjvrg popover=true popoverAnimateThumbnail=true" style="display:inline-block;height:84px;position:relative;width:150px">&nbsp;</span>			</a>
								      <div
								        class="circle-rating-pro"
								        data-value="0.86"
								        data-animation-start-value="0.86"
								        data-size="70"
								        data-thickness="6"
								        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
								        data-empty-fill="#def6de"
								        data-reverse="true"
								      ><span style="color:#42b740;">8.6</span></div>

										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h6>Movies</h6>
												<ul class="progression-studios-slider-rating">
													{{-- <li>PG-13</li><li>HD</li> --}}
                                                </ul>
                                                {{-- <iframe id="trailer" width="100%" height="600" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
												<h2><a href="dashboard-movie-profile.html">{!! ucfirst($values->FilmTitle) !!}</a></h2>
												<ul class="progression-studios-slider-meta">
													<li>{!! date("l jS\, F Y", strtotime($values->created_at)) !!}</li>
													<li>{!! $values->duration !!} Mins.</li>
													<li>{!! $values->Film_Type !!}</li>
                                                </ul>

												<p class="progression-studios-slider-description">{!! ucfirst($values->plot) !!}</p>

												{{-- <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i> Watch Trailer</a> --}}


												{{-- <div class="progression-studios-slider-more-options">
													<i class="fas fa-ellipsis-h"></i>
													<ul>
														<li><a href="#!">Add to Favorites</a></li>
														<li><a href="#!">Add to Watchlist</a></li>
														<li><a href="#!">Add to Playlist</a></li>
														<li><a href="#!">Share...</a></li>
														<li><a href="#!">Write A Review</a></li>
													</ul>
												</div> --}}
												<div class="clearfix"></div>

												<h5>Starring</h5>
												<ul class="progression-studios-staring-slider">
													<li><a href="#!"><img src="images/demo/user-1.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-2.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-3.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-4.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-5.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-6.jpg" alt="Starring"></a></li>
												</ul>

											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->

									</div><!-- close .container -->

								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->

							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
                    </li>
                    @endforeach
					<li class="progression_studios_animate_in">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url({);">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">

									<div class="container">

										<a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i></a>

							         <video id="VideoLightbox-2" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg?v1" width="960" height="540">
							             <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
							             <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
							         </video>

								      <div
								        class="circle-rating-pro"
								        data-value="0.82"
								        data-animation-start-value="0.82"
								        data-size="70"
								        data-thickness="6"
								        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
								        data-empty-fill="#203521"
								        data-reverse="true"
								      ><span style="color:#42b740;">8.2</span></div>

										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h6 class="light-fonts-pro">TV Series</h6>
												<ul class="progression-studios-slider-rating">
													<li>PG-13</li><li>HD</li>
												</ul>
												<h2 class="light-fonts-pro"><a href="dashboard-movie-profile.html">Made In America</a></h2>
												<ul class="progression-studios-slider-meta">
													<li>15 August, 2016 (UK)</li>
													<li>163 min.</li>
													<li>Documentary</li>
												</ul>
												<p class="progression-studios-slider-description light-fonts-pro">A sex columnist, Carrie Bradshaw, and her three friends Samantha, Charlotte
and Miranda explore  Manhattan's dating scene, chronicling the mating habits of
single New Yorkers.</p>

												<a class="btn btn-green-pro btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i> Watch Trailer</a>
												<div class="progression-studios-slider-more-options">
													<i class="fas fa-ellipsis-h"></i>
													<ul>
														<li><a href="#!">Add to Favorites</a></li>
														<li><a href="#!">Add to Watchlist</a></li>
														<li><a href="#!">Add to Playlist</a></li>
														<li><a href="#!">Share...</a></li>
														<li><a href="#!">Write A Review</a></li>
													</ul>
												</div>
												<div class="clearfix"></div>

												<h5 class="light-fonts-pro">Starring</h5>
												<ul class="progression-studios-staring-slider">
													<li><a href="#!"><img src="images/demo/user-1.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-2.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-3.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-4.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-5.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-6.jpg" alt="Starring"></a></li>
												</ul>

											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->

									</div><!-- close .container -->

								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->

							<div class="progression-studios-slider-mobile-background-cover-dark"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
				</ul>
			</div><!-- close .progression-studios-slider - See /js/script.js file for options -->

			<div class="clearfix"></div>

			<!-- close .dashboard-container -->
		</main>

		<div class="iframe-container" style="overflow: hidden; padding-top: 56.25%; position: relative;"> <iframe allow="microphone; camera" style="border: 0; height: 100%; left: 0; position: absolute; top: 0; width: 100%;" src="https://zoom.us/wc/join/6020659971" frameborder="0" sandbox="allow-forms allow-scripts"></iframe> </div>


		</div><!-- close #sidebar-bg-->

		<!-- Required Framework JavaScript -->
		<script src="js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
		<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->

		<script src="https://fast.wistia.com/embed/medias/hct8abjvrg.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

		<!-- Additional Plugins and JavaScript -->
		<script src="js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
		<script src="js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
		<script src="js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
		<script src="js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
		<script src="js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
		<script src="js/script.js" defer></script><!-- Custom Document Ready JS -->
		<script src="js/script-dashboard.js" defer></script><!-- Custom Document Ready for Dashboard Only JS -->


	</body>
</html>
