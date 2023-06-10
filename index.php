<?php
include('header.php');
include('navbar.php');
?>


<!-- --------------Header End-------------- -->

<!-- --------------Navbar End-------------- -->

<!-- --------------Swiper Start-------------- -->

<section class="mySlider">
	<div class="splide mySwiper">
		<div class="splide__arrows">
			<button class="splide__arrow splide__arrow--prev">
				<i class="fa-solid fa-circle-chevron-left"></i>
			</button>
			<button class="splide__arrow splide__arrow--next">
				<i class="fa-solid fa-circle-chevron-right"></i> </button>
		</div>
		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<img src="images/banner/banner-abc.jpg" alt="">
					<div class="image-data">
						<div class="container">
							<div class="img-data-wrapper">
								<span class="pack-quote">Into the Heart of Himalayas</span>
								<h2 class="pack-title">Annapurna Base Camp Trek</h2>
								<a href="abc.php" class="trip-detail-btn">In Detail <i class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<img src="images/banner-ebc.jpg" alt="">
					<div class="image-data">
						<div class="container">
							<span class="pack-quote">Trek to the foot of Mt. Everest</span>
							<h2 class="pack-title">Everest Base Camp Trek</h2>
							<a href="single.php" class="trip-detail-btn">In Detail <i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<img src="images/banner/banner-mardi.jpg" alt="">
					<div class="image-data">
						<div class="container">
							<span class="pack-quote">Unveiling the Mysteries of Himalayas</span>
							<h2 class="pack-title">Mardi Himal Trek - 10 Days</h2>
							<a href="" class="trip-detail-btn">In Detail <i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>


<!-- Search Container ----- -->

<div class="trip-search">
	<div class="container">


		<div class="row">
			<div class="col-md-9 mx-auto">
				<div class="search-title">
					<span class="title">
						Trip Search
					</span>
					<h3>Find Your Perfect Venture<h3>
				</div>
				<form action="">
					<input type="search" name="" id="" placeholder="Find your trip...">
					<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Latest trips -->

<section class="latest-trip">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="latest-wrap">
					<div class="wrap-text">
						<h3 class="wrap-title">Latest Trips</h3>
						<span class="explore">Nepal's Off The Bitten Trails</span>
						<span class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Debitis eveniet est beatae soluta.
							Similique amet, natus sint perferendis ratione corrupti?</span>
					</div>
					<div class="join-us"><a href="" class="join">Join Us Now</a></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="latest-card">
					<a href="" class="latest-image">
						<img src="images/mardi.jpg" alt="">
					</a>
					<main class="latest-detail">
						<div class="time-grade">
							<div class="time"><span class="duration"><i class="fa-solid fa-calendar-days"></i></span>
								<h4>9 Days</h4>
							</div>
							<div class="grade"><span class="chart"><i class="fa-solid fa-chart-column"></i></span>
								<h4>Medium</h4>
							</div>
						</div>
						<div class="trek-title">
							<a href="">
								<h3>Mardi Himal Trek</h3>
							</a>
						</div>
					</main>
					<div class="pricing">
						<span><i class="fa-solid fa-tags"></i>$695</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="latest-card">
					<a href="" class="latest-image">
						<img src="images/mustang.jpg" alt="">
					</a>
					<main class="latest-detail">
						<div class="time-grade">
							<div class="time"><span class="duration"><i class="fa-solid fa-calendar-days"></i></span>
								<h4>12 Days</h4>
							</div>
							<div class="grade"><span class="chart"><i class="fa-solid fa-chart-column"></i></span>
								<h4>Strenuous</h4>
							</div>
						</div>
						<div class="trek-title">
							<a href="">
								<h3>Upper Mustang Trek</h3>
							</a>
						</div>
					</main>
					<div class="pricing">
						<span><i class="fa-solid fa-tags"></i>$2299</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- --------------Venture Start---------------->
<section class="venture">
	<div class="container">
		<div class="venture-title">
			<span class="en-title">Our Best Sellers</span>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-4.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">

						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>14 Days</h2>
							</div>
						</div>
						<h1>Everest Base Camp Trek</h1>

					</main>
					<div class="vt-more">
						<a href="#" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 1395</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="abc.php" class="vt-image">
						<img class="image" src="images/featured-5.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>10 Days</h2>
							</div>
						</div>
						<h1>Annapurna Base Camp Trek</h1>
					</main>
					<div class="vt-more">
						<a href="abc.php" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 1080</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/gokyo.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>16 Days</h2>
							</div>
						</div>
						<h1>Gokyo Valley Trek</h1>
					</main>
					<div class="vt-more">
						<a href="#" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 1749</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-2.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>10 Days</h2>
							</div>
						</div>
						<h1>Ghorepani Poohill Trek</h1>
					</main>
					<div class="vt-more">
						<a href="#" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 695</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/langtang.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>10 Days</h2>
							</div>
						</div>
						<h1>Langtang Valley Trek</h1>
					</main>
					<div class="vt-more">
						<a href="#" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 795</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/manaslu.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<div class="flex-row">
							<div class="coin-base">
								<span>Duration:</span>
								<h2>16 Days</h2>
							</div>
						</div>
						<h1>Manaslu Circuit Trek</h1>
					</main>
					<div class="vt-more">
						<a href="#" class="learn-more">Trip Details<i class="fa-solid fa-arrow-right"></i></a>
					</div>
					<div class="cost">
						<span><strong>$</strong> 1550</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>



<!-- **** customize-trips **** -->
<div class="customize-trip">
	<div class="container">
		<h3>Customize Your Trip</h3>
		<p>Tell us your estimated holiday time, budget, travel style etc, We will design awesome customized trip for you.</p>
		<a href="#" class="start-btn">Start Now<i class="fa-solid fa-arrow-right"></i></a>
	</div>
</div>



<!-- My Intro Section -->

<section class="my-intro">
	<div class="container">
		<div class="wl-title"><span class="my-title">Welcome To</span>

			<span class="sh-title">Outdoor Activities in Nepal, Tibet and Bhutan</span>
		</div>
		<div class="row">

			<div class="intro-card">

				<div class="intro-text">
					<p><b>Shikhar Adventure</b> is a leading trekking agency in Nepal, owned and operated by <b><u>Dambar Thapa</u></b>,<br>
						a seasoned trekking guide with over a decade of experience in the industry. With a team of experienced and knowledgeable
						guides, <b>Shikhar Adventure</b> offers a wide range of trekking packages to suit every level of trekker,<br> from beginners
						to experienced adventurers.</p>
					<p><b>We</b> are dedicated to giving our clients the best trekking experience in Nepal. We specialize in
						organizing trekking <br> tours to some of the most beautiful locations in the Himalayas, such as the <b><u>Everest Base Camp</u></b>,<br>
						the <b><u>Annapurna Circuit</u></b>, and the <b><u>Langtang Valley</u></b>,
						among others. With a focus on safety,<br> comfort, and adventure, our <b>trekking</b> packages are designed to
						provide a one-of-a-kind <br> and unforgettable experience.</p>
					<p><b>" Your Travel is Our Xenium "</b></p>

					<p>To summarize, <b>Shikhar Adventure</b> is the ideal choice for the ultimate <a href=""><b><u>trekking</u></b></a>experience in <b>Nepal</b>.
						We guarantee a safe, comfortable, and unforgettable Himalayan adventure with our commitment to sustainable tourism,
						experienced guides, and personalized services. <a href=""><b><u>Contact us</u></b></a> today to reserve your trekking tour!</p>
				</div>

				<div class="read-intro">
					<a href="" class="read">Read More <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>


		</div>
	</div>
</section>

<!--* ==========================Top Destinaitons======================================= -->
<!-- <section class="top-box">
	<div class="container">
		<div class="top-title">
			<span class="title">Top <Strong>Destinations</Strong></span>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="dest-card">
					<a href=""><img src="images/nepal.jpg" alt="Image"></a>
					<div class="overlay">
						<a href="#" class="">Nepal</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="dest-card">
					<a href=""><img src="images/tibet.jpg" alt="Image"></a>
					<div class="overlay">
						<a href="#" class="">Tibet</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="dest-card">
					<a href=""><img src="images/bhutan.jpg" alt="Image"></a>
					<div class="overlay">
						<a href="#" class="">Bhutan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->



<!--NEW TESTI-->
<section id="page" class="site">
	<div class="container">
		<div class="testi">
			<div class="head">
				<h3>Testimonials<strong>.</strong></h3>
				<p>See what people are saying..</p>
			</div>
			<div class="body swiper swiperTest">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/profile-1.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Awesome Experience</span>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Gigi Hadid</h4>
									<p>Cupertino, U.S.A</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image2.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Best Guide I've Ever Had</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Sarah Malik</h4>
									<p>Texas, U.S.A</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image3.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Great Experience</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Kelly Wakasa</h4>
									<p>Sydney, Australia</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image4.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Friendly Guides & Porters</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Ava Karlson</h4>
									<p>Canberra, Australia</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image5.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Very Concerned About Safety</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Emma Watson</h4>
									<p>Toronto, Canada</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>

							</div>
						</div>
					</li>
				</ul>
				<div class="swiper-pagination swiper-pagination2"></div>
				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev swiper-button-prev-x"></div>
				<div class="swiper-button-next swiper-button-next-y"></div>
			</div>
		</div>
	</div>
</section>



<!--Featured Trips-->
<section class="featured">
	<div class="container">
		<div class="title-box"><span>Featured Trips</span></div>
		<section id="demos">
			<div class="row">

				<div class="owl-carousel owl-theme">


					<div class="item">
						<a class="ft-image" href=""> <img src="images/marriage.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="duration-grade">
								<div class="dt-box">
									<span class="trip-duration"><i class="fa-solid fa-calendar-days"></i></span>
									<h4>9 Days</h4>
								</div>
								<div class="trip-grade"><span class="trip-chart"><i class="fa-solid fa-tags"></i></span>
									<h4>8999</h4>
								</div>
							</div>
							<div class="title">
								<a href="">
									<h3> Marriage in Everest Base Camp
									</h3>
								</a>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/tiji.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="duration-grade">
								<div class="dt-box">
									<span class="trip-duration"><i class="fa-solid fa-calendar-days"></i></span>
									<h4>13 Days</h4>
								</div>
								<div class="trip-grade"><span class="trip-chart"><i class="fa-solid fa-tags"></i></span>
									<h4>2655</h4>
								</div>
							</div>
							<div class="title">
								<a href="">
									<h3>Tiji Festival Trek
									</h3>
								</a>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/luxury.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="duration-grade">
								<div class="dt-box">
									<span class="trip-duration"><i class="fa-solid fa-calendar-days"></i></span>
									<h4>12 Days</h4>
								</div>
								<div class="trip-grade"><span class="trip-chart"><i class="fa-solid fa-tags"></i></span>
									<h4>$3699</h4>
								</div>
							</div>
							<div class="title">
								<a href="">
									<h3>Everest Luxury Trek</h3>
								</a>
							</div>
						</main>


					</div>

					<div class="item">
						<a class="ft-image" href=""> <img src="images/tilicho-lake.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="duration-grade">
								<div class="dt-box">
									<span class="trip-duration"><i class="fa-solid fa-calendar-days"></i></span>
									<h4>17 Days</h4>
								</div>
								<div class="trip-grade"><span class="trip-chart"><i class="fa-solid fa-tags"></i></span>
									<h4>1455</h4>
								</div>
							</div>
							<div class="title">
								<a href="">
									<h3>Tilicho Lake Trekking
									</h3>
								</a>
							</div>
						</main>


					</div>

					<div class="item">
						<a class="ft-image" href=""> <img src="images/phoksundo.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="duration-grade">
								<div class="dt-box">
									<span class="trip-duration"><i class="fa-solid fa-calendar-days"></i></span>
									<h4>18 Days</h4>
								</div>
								<div class="trip-grade"><span class="trip-chart"><i class="fa-solid fa-tags"></i></span>
									<h4>1985</h4>
								</div>
							</div>
							<div class="title">
								<a href="">
									<h3>Shey Phoksundo Trek
									</h3>
								</a>
							</div>
						</main>

					</div>


				</div>
			</div>
		</section>
	</div>
</section>
<!--Featureds Trip End-->

<!-- E-NEWSLETTER -->
<section class="e-news">
	<div class="container">
		<div class="e-text">
			<span class="e-title">Let's Stay in Touch</span>
			<p class="e-body">Never miss out on exciting updates—subscribe to our e-newsletter today!</p>
		</div>
		<div class="e-form">
			<form action="" method="post">
				<input type="email" name="" id="" placeholder="Enter your e-mail here!">
				<button type="submit"><span><i class="fa-solid fa-paper-plane"></i> Subscribe</span></button>
			</form>
		</div>


	</div>
</section>
<!-- Recent Post Start -->
<section class="blog">

	<div class="container">
		<div class="blog-head">
			<div class="blog-title">
				<span>Latest <strong>Posts</strong></span>
			</div>
			<div class="see-more"> <a href="blog.php">Load More<i class="fa-solid fa-arrow-right"></i></a>
			</div>




		</div>
		<div class="blog-wrapper">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-card main">
						<a href="" class="blog-link"><img src="images/yoga.jpg" alt=""></a>
						<div class="blog-content">
							<div class="entry-meta"><span>Travel Guide</span></div>
							<a href="" class="post-title">
								<h3>Everything you need to know about Annapurna Base Camp Trek</h3>
							</a>
							<div class="exit-meta"><span class="date">June 6, 2023</span></div>
						</div>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-card sub">
						<div class="blog-img"> <a href="" class="blog-link"><img src="images/featured-4.jpg" alt=""></a>
						</div>
						<div class="blog-content">
							<div class="entry-meta"><span>Trek Guide</span></div>
							<a href="" class="post-title">
								<h3>Top 10 Trekking Routes in Nepal</h3>
							</a>
							<div class="exit-meta"><span class="date">June 1, 2023</span></div>
						</div>

					</div>
				</div>





				<div class="col-lg-4">
					<div class="blog-card sub">
						<div class="blog-img"> <a href="" class="blog-link"><img src="images/blog-c.JPG" alt=""></a>
						</div>
						<div class="blog-content">
							<div class="entry-meta"><span>Culture</span></div>
							<a href="" class="post-title">
								<h3>Drown deep into the culture of Nepal</h3>
							</a>
							<div class="exit-meta"><span class="date">May 30, 2023</span></div>
						</div>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-card sub">
						<div class="blog-img"> <a href="" class="blog-link"><img src="images/blog-larke.JPG" alt=""></a>
						</div>
						<div class="blog-content">
							<div class="entry-meta"><span>Trek Guide</span></div>
							<a href="" class="post-title">
								<h3>Adventure Off the bitten trails in Nepal</h3>
							</a>
							<div class="exit-meta"><span class="date">May 25, 2023</span></div>
						</div>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-card sub">
						<div class="blog-img"> <a href="" class="blog-link"><img src="images/blog-ktm.JPG" alt=""></a>
						</div>
						<div class="blog-content">
							<div class="entry-meta"><span>Places to visit</span></div>
							<a href="" class="post-title">
								<h3>Top 10 Must visit places in Kathmandu</h3>
							</a>
							<div class="exit-meta"><span class="date">May 14, 2023</span></div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>



</section>
<!-- Recent Post End -->


<!----------Footer section-------->



<!-- <div class="" id="message">
<span id="message-icon"><i class="fa-brands fa-facebook-messenger"></i></span>
</div> -->





<?php
include('footer.php');
?>