@extends('layouts.guest')

@section('guest-content')

<!------------------------------ Start of main images slider section ------------------------------>

<div class="row m-0">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
		<div id="zahrasignsMainCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner" id="zahrasignsMainCarouselImagesHolder">
				<div class="carousel-item active">
					<div class="slide1"></div>
				</div>

				<div class="carousel-item">
					<div class="slide2"></div>
				</div>

				<div class="carousel-item">
					<div class="slide3"></div>
				</div>
			</div>

			<div id="zahrasignsMainCarouselTextArea">
				<h1 class="text-white text-center mt-3" id="zahrasignsMainCarouselText"><u>ZAHRA SIGN SYSTEMS LTD</u></h1>

				<h2 class="text-white" id="zahrasignsMainCarouselTextDescription"><span class="typed-text"></span><span class="ourCursor">&nbsp;</span></h2>
			</div>

			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
	</div>
</div>

<!------------------------------ End of main images slider section ------------------------------>

<!------------------------------ Start of post top introduction section ------------------------------>

<div class="row m-0" id="introductionSectionBackground">
	<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 p-0"></div>

	<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-0">
		<h2 class="text-center mt-5 topReveal" id="introTitleStatement">Any time, Any place,Allow us to introduce ourselves</h2>

		<p class="text-center mt-5 mb-5 bottomReveal" id="introDescriptionStatement">At <b><i>Zahra Sign Systems LTD</i></b>, we provide <b>exceptional quality</b>, <b>design</b> and <b>timely delivery</b> of signs to represent your business, brand or institution. Our team of experts has over a decade of experience in creating 3D signs and utilizes the latest technology and techniques to design and manufacture visually striking and functional signs. Let us help you showcase your brand in the best way possible.</p>
	</div>

	<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 p-0"></div>
</div>

<!------------------------------ End of post top introduction section ------------------------------>

<!------------------------------ Start of signage process section ------------------------------>

<div class="row m-0" id="signageProcessRow">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0 pb-5 darkShade">
		<h2 class="text-center text-white pb-5" id="signageProcessTitle">Our Signage Process</h2>

		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide" id="signageSwiperSlide1">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Requirement-Analysis.png" alt="requirements-analysis">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Requirements Analysis</h3>

							<p class="text-center text-white mt-3">We will work with you to understand your specific needs and requirements to ensure we create a solution that perfectly fits your brand and vision. During this process, we gather information such as your desired design, size, and placement to create a tailored plan.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>

				<div class="swiper-slide" id="signageSwiperSlide2">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Consulting.png" alt="consultation">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Consultation</h3>

							<p class="text-center text-white mt-3"><b><i>Zahra Signs Systems LTD</i></b> offers expert assistance for your project by providing innovative ideas based on a comprehensive brief. Enhance your project with our expert input by scheduling in-person meetings, convenient phone calls, or efficient email communication.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>

				<div class="swiper-slide" id="signageSwiperSlide3">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Design.png" alt="design-modelling">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Design & Modelling</h3>

							<p class="text-center text-white mt-3">Our team of experienced designers use the latest software and technology to bring your ideas to life, using precise measurements and attention to detail. Through this process, we can present you with a detailed, 3D model of your sign, which allows you to see how it will look in real-life.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>

				<div class="swiper-slide" id="signageSwiperSlide4">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Mockup.png" alt="design-prototyping">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Design Mockups</h3>

							<p class="text-center text-white mt-3">Our team of skilled designers will take your ideas and translate them into a 3D image, giving you a clear visual representation of what your final sign will look like. Our mockups are highly detailed and provide you with an accurate representation of the size, materials, and overall look of your sign.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>

				<div class="swiper-slide" id="signageSwiperSlide5">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Production.png" alt="design-refinement">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Design Production</h3>

							<p class="text-center text-white mt-3">Our advanced software ensures that every design detail is captured and optimized. We also check for errors while making necessary adjustments to ensure the final product meets your expectations. With our attention to detail and commitment to quality, be assured that your 3D signage will look stunning.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>

				<div class="swiper-slide" id="signageSwiperSlide6">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-center">
							<img class="mt-3" src="/images/signage_process/Installation.png" alt="installation">
						</div>
					</div>
					
					<div class="row pt-1">
						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

						<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
							<h3 class="text-center text-white mt-3">Installation</h3>

							<p class="text-center text-white mt-3">Our team of experienced technicians will carefully handle and install the signage at your desired location, making sure that it is securely in place and meets all safety standards. Our installation process is quick and efficient, minimizing any disruption to your business operations.</p>
						</div>

						<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
					</div>
				</div>
			</div>

			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
		</div>

	</div>
</div>

<!------------------------------ End of signage process section ------------------------------>

<!------------------------------ Start of extra content section ------------------------------>

<div class="row m-0" id="extraContentSection">
	<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

	<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
		<div id="extraContentSectionTitleHolder">
			<h2 id="extraContentSectionTitle">Bringing your <br> <span id="extraContentSectionTitleKey1">vision</span> to <span id="extraContentSectionTitleKey2">life</span></h2>	
		</div>
	</div>

	<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
		<p id="extraContentSectionDescription">By understanding that your business is more than just a logo and a name, that it's a reflection of your vision and values. That's why we are dedicated to bringing your vision to life with our innovative and eye-catching 3D signage solutions. Our team of expert designers and craftsmen will work with you to create custom signs that perfectly embody your brand, while also providing the functionality you need to succeed. From illuminated signs to dimensional letters, we have the expertise and experience to turn your vision into a reality. Choose Zahra Signs Systems LTD for signs that truly reflect the spirit of your business.</p>
	</div>

	<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
</div>

<!------------------------------ Start of extra content section ------------------------------>

<!------------------------------ Start of portfolio section ------------------------------>

<div class="row m-0" id="portFolioSection">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0 darkShade">
		<h2 class="text-center text-white pb-5" id="portFolioTitle">Our Portfolio</h2>

		<div class="row pt-1 pb-1 m-0" id="portFolioCardRow">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody1"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Malls and Buildings</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody2"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Energy and Petroleum</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody3"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Pylon Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody4"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Warning Signs</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="row pb-5 m-0" id="portFolioCardRow">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody5"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Door Panels</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody6"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Non-Illuminated Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody7"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">3D Illuminated Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="portFolioCardCol">
				<a href="">
					<div class="card" id="portFolioCard">
						<div class="card-body" id="portFolioCardBody8"></div>

						<div class="card-footer text-center">
							<p id="portFolioCardText">Branding</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!------------------------------ End of portfolio section ------------------------------>

<!------------------------------ Start of numbers counter section ------------------------------>

<div class="row m-0 pb-5 darkShade" id="statisticsCounter">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
		<h2 class="text-center text-white pb-5" id="statisticsCounterTitle">We are result driven, the numbers don't lie</h2>

		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-clock text-white" id="portFolioIcon"></i>
				<p class="text-white" id="portFolioNumber"><span class="counter">100000</span><span>+</span></p>
				<p class="text-white" id="portFolioText">Working Hours</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-briefcase text-white" id="portFolioIcon"></i>
				<p class="text-white" id="portFolioNumber"><span class="counter">2500</span><span>+</span></p>
				<p class="text-white" id="portFolioText">Completed Projects</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-briefcase text-white" id="portFolioIcon"></i>
				<p class="text-white" id="portFolioNumber"><span class="counter">5000</span><span>+</span></p>
				<p class="text-white" id="portFolioText">Happy Clients</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-history text-white" id="portFolioIcon"></i>
				<p class="text-white" id="portFolioNumber"><span class="counter">60</span><span>+</span></p>
				<p class="text-white" id="portFolioText">Years of Experience</p>
			</div>
		</div>
	</div>
</div>

<!------------------------------ End of numbers counter section ------------------------------>

@endsection



