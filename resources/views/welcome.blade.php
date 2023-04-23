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
				<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
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

				<div class="carousel-item">
					<div class="slide4"></div>
				</div>

				<div class="carousel-item">
					<div class="slide5"></div>
				</div>
			</div>

			<div id="zahrasignsMainCarouselTextArea">
				<h1 class="text-white text-center mt-3" id="zahrasignsMainCarouselText"><u>ZAHRA SIGN SYSTEMS LTD</u></h1>

				<h2 class="text-white" id="zahrasignsMainCarouselTextDescription"><span class="typed-text"></span><span class="ourCursor">&nbsp;</span></h2>
			</div>

			<!-- <div class="bg-dark rounded" id="zahrasignsGetQuoteFormArea">
				<h3 class="text-center text-white mt-1" id="zahrasignsGetQuoteFormTitle">Request a Quote</h3>
				
				{{--
				<form action="{{ route('requestQuote.store') }}" method="POST" class="mt-3" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
					@csrf

					<div class="row p-2">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="input_full_names" class="form-label text-white" id="label_input_full_names">Full Names:</label>

							<input type="text" name="full_names" class="form-control @error('full_names') is-invalid @enderror border border-secondary" id="input_full_names" minlength="3" maxlength="50" placeholder="John Doe" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The full names should contain between 3-50 characters" autofocus>

							@error('full_names')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>

						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="input_email" class="form-label text-white" id="label_input_email">Email:</label>

							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror border border-secondary" id="input_email" minlength="3" maxlength="50" placeholder="Johndoe@gmail.com" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The email address should contain between 3-50 characters" autofocus>

							@error('email')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>
					</div>

					<div class="row p-2">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="input_phone_number" class="form-label text-white" id="label_input_phone_number">Phone Number:</label>

							<input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror border border-secondary" id="input_phone_number" minlength="7" maxlength="15" placeholder="+254000000000" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The phone number should contain between 7-15 characters inclusive of your country code" autofocus>

							@error('phone_number')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>

						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<label for="input_postal_code" class="form-label text-white" id="label_input_postal_code">Postal Code:</label>

							<input type="text" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror border border-secondary" id="input_postal_code" minlength="3" maxlength="20" placeholder="90210" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The postal code should contain between 3-30 characters" autofocus>

							@error('postal_code')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>
					</div>

					<div class="row p-2">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
							<label for="input_quote" class="form-label text-white" id="label_input_quote">Request Quote:</label>

							<textarea name="quote" class="form-control @error('quote') is-invalid @enderror border border-secondary" id="input_quote" minlength="25" maxlength="255" placeholder="Please provide us with information about your quotation from here" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The requested quote should contain between 25-255 characters" rows="3" autofocus></textarea>

							@error('quote')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>
					</div>

					<div class="row p-2">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
							<label for="inputUploadFile" class="form-label text-white" id="label_input_upload_file">Please upload any files from here</label>
							<input type="file" name="file_upload" class="form-control @error('file_upload') is-invalid @enderror border border-secondary" id="input_upload_file" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="File uploads...">

							@error('file_upload')
                               	<span class="invalid-feedback alert alert-warning" role="alert">
                                	<strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                               	</span>
                            @enderror
						</div>
					</div>

					<div class="row pt-5 pb-5">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
							<button type="submit" class="btn btn-primary rounded-pill ms-3" id="zahrasignsGetQuoteFormButton">Submit Request</button>
						</div>
					</div>
					
				</form>
				--}}
			</div> -->

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
		<h2 class="text-center text-white pb-3" id="signageProcessTitle">Our Signage Process</h2>

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

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">1</span>
							</div>
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

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">2</span>
							</div>
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

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">3</span>
							</div>
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

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">4</span>
							</div>
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

							<p class="text-center text-white mt-3">Our advanced software ensures that every detail is captured and optimized. We make adjustments to ensure the final product meets your expectations. With our attention to detail and commitment to quality, be assured that your 3D signage will look stunning.</p>

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">5</span>
							</div>
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

							<div class="d-flex justify-content-center">
								<span class="text-white" id="signageSwiperSlideNumber">6</span>
							</div>
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

	<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
		<div id="extraContentSectionTitleHolder">
			<h2 class="text-center" id="extraContentSectionTitle">Bringing your <span id="extraContentSectionTitleKey1">vision</span> to <span id="extraContentSectionTitleKey2">life</span></h2>	
		</div>
	</div>

	<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
</div>

<!------------------------------ Start of extra content section ------------------------------>

<!------------------------------ Start of products section ------------------------------>

<div class="row m-0" id="productsSection">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0 darkShade">
		<h2 class="text-center text-white pb-3" id="productsTitle">Our Products & Services</h2>

		<div class="row pt-1 pb-1 m-0" id="productsCardRow">
			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
				<a href="{{ route('indoorSignsIndex') }}">
					<div class="card-body" id="indoorSigns">
						<div class="d-flex justify-content-center" id="cardSignsDarkShade">
							<h5 id="cardSignsText">Indoor</h5>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
				<a href="{{ route('outdoorSignsIndex') }}">
					<div class="card-body" id="outdoorSigns">
						<div class="d-flex justify-content-center" id="cardSignsDarkShade">
							<h5 id="cardSignsText">Outdoor</h5>
						</div>
					</div>
				</a>
			</div>
		</div>

		<!-- <div class="row pt-1 pb-1 m-0" id="productsCardRow">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="" target="_blank">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody1"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Malls and Buildings Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody2"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Energy and Petroleum Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody3"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Pylon Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody4"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Warning Signs</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="row pb-5 m-0" id="productsCardRow">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody5"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Door Panels</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody6"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Non-Illuminated Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody7"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">3D Illuminated Signs</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-center p-3" id="productsCardCol">
				<a href="">
					<div class="card" id="productsCard">
						<div class="card-body" id="productsCardBody8"></div>

						<div class="card-footer text-center">
							<p id="productsCardText">Branding</p>
						</div>
					</div>
				</a>
			</div>
		</div> -->

	</div>
</div>

<!------------------------------ End of products section ------------------------------>

<!------------------------------ Start of numbers counter section ------------------------------>

<div class="row m-0 pb-5" id="statisticsCounter">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
		<h2 class="text-center pb-3" id="statisticsCounterTitle">We are result driven</h2>

		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-clock" id="portFolioIcon"></i>
				<p id="portFolioNumber"><span class="counter">100000</span><span>+</span></p>
				<p id="portFolioText">Working Hours</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-briefcase" id="portFolioIcon"></i>
				<p id="portFolioNumber"><span class="counter">2500</span><span>+</span></p>
				<p id="portFolioText">Completed Projects</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-briefcase" id="portFolioIcon"></i>
				<p id="portFolioNumber"><span class="counter">5000</span><span>+</span></p>
				<p id="portFolioText">Happy Clients</p>
			</div>

			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center p-3">
				<i class="fa fa-history" id="portFolioIcon"></i>
				<p id="portFolioNumber"><span class="counter">60</span><span>+</span></p>
				<p id="portFolioText">Years of Experience</p>
			</div>
		</div>
	</div>
</div>

<!------------------------------ End of numbers counter section ------------------------------>

<!------------------------------ Start of testimonials section ------------------------------>

<div class="row m-0" id="testimonialSection">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 darkShade">
		<h2 class="text-center text-white pb-3" id="testimonialsTitle">Testimonials</h2>

		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

			<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
				<div class="card bg-dark rounded" id="testimonialsCard">
					<!--<div class="card-header"></div>-->

					<div class="card-body">
						<div id="zahrasignsMainTestimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner" id="zahrasignsMainCarouselTestimonialsHolder">
								<div class="carousel-item active">
									<div class="row">
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
											<div id="clientTestimonialsImage"></div>
										</div>

										<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
											<q class="text-white"><b>Zahra Sign Systems LTD</b> provided us with top-notch 3D signage that perfectly captured the essence of our brand. Their team was incredibly knowledgeable and dedicated, helping us every step of the way. Their attention to detail and commitment to excellence truly sets them apart from the competition. I would highly recommend <b>Zahra Sign Systems LTD</b> to anyone in need of professional, high-quality signage solutions.</q>

											<div class="row pt-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
													<p class="text-center text-white"><b>Company/Business Name:</b></p>
													<p class="text-center text-white"><b>Employee/Client Name:</b></p>
													<p class="text-center text-white"><b>Employee Position:</b></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
											<div id="clientTestimonialsImage"></div>
										</div>

										<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
											<q class="text-white">As a business owner, it was important for me to find a 3D signage company that I could trust to deliver on their promises. <b>Zahra Sign Systems LTD</b> exceeded all of my expectations. From the initial consultation to the final installation, their team was professional, efficient, and extremely helpful. Their innovative designs and cutting-edge technology brought my brand to life in a way I never thought possible. I am truly grateful to have found <b>Zahra Sign Systems LTD.</b></q>

											<div class="row pt-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
													<p class="text-center text-white"><b>Company/Business Name:</b></p>
													<p class="text-center text-white"><b>Employee/Client Name:</b></p>
													<p class="text-center text-white"><b>Employee Position:</b></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
											<div id="clientTestimonialsImage"></div>
										</div>

										<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
											<q class="text-white">I had the pleasure of working with <b>Zahra Sign Systems LTD</b> on a recent project and was blown away by their expertise and professionalism. Their 3D signage solutions transformed the look and feel of our space, adding a level of sophistication and style that was exactly what we were looking for. The team at <b>Zahra Sign Systems LTD</b> went above and beyond to ensure our complete satisfaction and I would not hesitate to work with them again in the future.</q>

											<div class="row pt-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
													<p class="text-center text-white"><b>Company/Business Name:</b></p>
													<p class="text-center text-white"><b>Employee/Client Name:</b></p>
													<p class="text-center text-white"><b>Employee Position:</b></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<button class="carousel-control-prev darkShade" id="zahrasignsMainTestimonialsCarouselButtons" type="button" data-bs-target="#zahrasignsMainTestimonialsCarousel" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>

							<button class="carousel-control-next darkShade" id="zahrasignsMainTestimonialsCarouselButtons" type="button" data-bs-target="#zahrasignsMainTestimonialsCarousel" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<!--<div class="card-footer"></div>-->
				</div>
			</div>

			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
		</div>
	</div>
</div>

<!------------------------------ End of testimonials section ------------------------------>

<!------------------------------ Start of map section ------------------------------>

<div class="row m-0">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-0">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.009857006935!2d36.86585!3d-1.3244026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f118ae78d2ba9%3A0x72a2b4136896c349!2sZahra%20Sign%20Systems%20Ltd!5e0!3m2!1sen!2ske!4v1675960879502!5m2!1sen!2ske" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mainMapSection"></iframe>
	</div>
</div>

<!------------------------------ End of map section ------------------------------>

@endsection



