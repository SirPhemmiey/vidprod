<!-- Page Content Start -->
<div class="page-content">
<!-- About Us Area Start -->
<section class="aboutus-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aboutus-content text-center">
					<div class="aboutus-titel">
						<h2>ABOUT US</h2>

					</div>
					<div class="aboutus-video bg-overlay-1"
					style="background:url(<?php echo $about_video['About_video']['cover_photo']?>) repeat scroll 0 0 / cover">
						<div class="video-content">
							<a href="<?php echo $about_video['About_video']['link']?>" class="popup-youtube">
								<i class="icofont icofont-play-alt-2"></i>
							</a>
						</div>
					</div>
					<div class="aboutus-bottom-txt">
						<p>We are an audio visual production outfit providing multimedia services, content development, films/video production and post production services.</p>
						<div class="person-area">
							<div class="person-img">
								<img src="img/ceo.png" alt="" />
							</div>
							<div class="person-txt">
								<h6>OLONADE M. GBENGA</h6>
								<span>CEO</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Us Area End -->
<!-- Project Area Start -->
<section class="project-area ptb-90 bg-12">
	<div class="container">
		<div class="row">
			<!-- Project Single -->
			<div class="col-md-3 col-sm-4">
				<div class="project-single text-center">
					<div class="project-count text-uppercase">
						<span class="counter">20</span>
						<h3>Awards</h3>
					</div>
				</div>
			</div>
			<!-- Funfact Single -->
			<!-- Project Single -->
			<div class="col-md-3 col-sm-4">
				<div class="project-single text-center">
					<div class="project-count text-uppercase">
						<span class="counter">15</span>
						<h3>Years</h3>
					</div>
				</div>
			</div>
			<!-- Funfact Single -->
			<!-- Project Single -->
			<div class="col-md-3 col-sm-4">
				<div class="project-single text-center">
					<div class="project-count text-uppercase">
						<span class="counter">50</span>
						<h3>Complete Work</h3>
					</div>
				</div>
			</div>
			<!-- Funfact Single -->
			<!-- Project Single -->
			<div class="col-md-3 hidden-sm">
				<div class="project-single text-center">
					<div class="project-count text-uppercase">
						<span class="counter">100</span>
						<h3>Happy Clients</h3>
					</div>
				</div>
			</div>
			<!-- Funfact Single -->
		</div>
	</div>
</section>
<!-- Project Area End -->
<!-- Latest Tailer Area Strat -->
<section class="tailer-area ptb-90 indicator-style">
	<div class="container">
		<div class="row">
			<!-- Section Titel -->
			<div class="col-md-12">
				<div class="section-titel-img text-center mb-45">
					<h2>LATEST VIDEOS</h2>
					<p>It is a long established fact that a reader will be distracted readable </p>
				</div>
			</div>
			<!-- Section Titel -->
		</div>
		<!-- Trailer Single Item Area Start -->
		<div class="main-section">
			<div class="tailer-active owl-carousel owl-theme">
				<!-- Single Item -->
				<?php if (!empty($latest_video)) { foreach ($latest_video as $video) {?>
					<div class="trailer-single">
					<div class="trailer-img">
						<img src="<?php echo $video['Latest_video']['cover_photo']?>" alt="" />
						<a href="<?php echo $video['Latest_video']['link']?>" class="popup-youtube">
							<i class="icofont icofont-play-alt-2"></i>
						</a>
					</div>
				</div>

				<?php }} else {?>
					<div class="trailer-single">
					<div class="trailer-img">
						<img src="img/home-one/trailer/4.png" alt="" />
						<a href="https://www.youtube.com/watch?v=YWNWi-ZWL3c&amp;index=9&amp;list=PLxhue1Ul7SivWQDWe_P00IqTwem3wKxkb" class="popup-youtube">
							<i class="icofont icofont-play-alt-2"></i>
						</a>
					</div>
					<div class="trailer-titel">
						<h5><a href="service.html">FLY TO TEST</a> <span>3.45</span> </h5>
					</div>
				</div>
				<?php }?>

			</div>
		</div>
		<!-- Trailer Single Item Area End -->
	</div>
</section>
<!-- Latest Tailer Area End -->
<!-- All Service Area Start -->
<section class="service-area pt-90 pb-50 bg-13 bg-overlay-1 indicator-style">
	<div class="container">
		<div class="row">
			<!-- Section Titel -->
			<div class="col-md-12">
				<div class="section-titel-img two text-center mb-45">
					<h2>SERVICES</h2>
					<p>We are an audio visual production outfit providing multimedia services, content development, films/video production and post production services. </p>
				</div>
			</div>
			<!-- Section Titel -->
		</div>
		<!-- Service Single Item Area Start -->
		<div class="row">
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-ui-video-play"></i>
					</div>
					<div class="service-details">
						<h4>MEDIA EQUIPMENTS HIRING</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-video-cam"></i>
					</div>
					<div class="service-details">
						<h4>LIVE EVENTS COVERAGE</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-movie"></i>
					</div>
					<div class="service-details">
						<h4>VIDEO/FILMS/DOCUMENTARIES/TV PROGRAMMES</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-record"></i>
					</div>
					<div class="service-details">
						<h4>DIGITAL POST PRODUCTION STUDIOS</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-film"></i>
					</div>
					<div class="service-details">
						<h4>VHS, DV TAPES CONVERSION</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
			<!-- Single Item -->
			<div class="col-md-4 col-sm-4">
				<div class="service-single text-center">
					<div class="servce-icon">
						<i class="icofont icofont-multimedia"></i>
					</div>
					<div class="service-details">
						<h4>MASS DUBBING</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
					</div>
				</div>
			</div>
			<!-- Single Item -->
		</div>
		<!-- Service Single Item Area End -->
	</div>
</section>
<!-- All Service Area End -->

<!-- Our Team Area Start -->
<section class="ourteam-area ptb-90">
	<div class="container">
		<div class="row">
			<!-- Section Titel -->
			<div class="col-md-12">
				<div class="section-titel-img text-center mb-45">
					<h2>GALLERY</h2>
				</div>
			</div>
			<!-- Section Titel -->
		</div>
		<!-- Service Main Area Start -->
		<div class="row">
			<div class="col-md-12">
				<div class="slider slider-for">
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic1.jpeg" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic2.jpeg" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic3.jpeg"" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic4.jpeg"" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic5.jpeg"" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->
					<!-- Service Slider Single -->
					<div class="single-item">
						<div class="large-img">
							<img src="img/pic6.jpeg"" alt="" />
						</div>
						<div class="thumb-content text-right">
							<div class="thumb-personal-info">
								<div class="teamper-titel">
									<h5></h5>
									<span></span>
								</div>
								<div class="team-social">
									<ul>
										<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Service Slider Single -->


				</div>
				<!-- Service Thumb Area Start -->
				<div class="slider slider-nav">
					<div class="thumb-single">
						<img src="img/thumb-pic1.jpg" alt="" />
					</div>
					<div class="thumb-single">
						<img src="img/thumb-pic2.jpg" alt="" />
					</div>
					<div class="thumb-single">
						<img src="img/thumb-pic3.jpg" alt="" />
					</div>
					<div class="thumb-single">
						<img src="img/thumb-pic4.jpg" alt="" />
					</div>
					<div class="thumb-single">
						<img src="img/thumb-pic5.jpg" alt="" />
					</div>
					<div class="thumb-single">
						<img src="img/thumb-pic6.jpg" alt="" />
					</div>
				</div>
				<!-- Service Thumb Area Start -->
			</div>
		</div>
		<!-- Service Main Area End -->
	</div>
</section>
<!-- Our Team Area End -->
</div>
<!-- Page Content End -->