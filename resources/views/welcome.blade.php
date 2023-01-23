@extends('layouts.guest')

@section('guest-content')

<!------------------------------ Start of main images slider section ------------------------------>

<div id="zahrasignsMainCarousel" class="carousel slide" data-bs-ride="carousel">
	 <div class="carousel-indicators">
    	<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    	<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    	<button type="button" data-bs-target="#zahrasignsMainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  	</div>

	<div class="carousel-inner" id="zahrasignsMainCarouselImagesHolder">
		<div class="carousel-item active">
			<img src="/images/sign.jpg" class="slide1" alt="...">
		</div>

		<div class="carousel-item">
			<img src="/images/sign1.jpg" class="slide2" alt="...">
		</div>

		<div class="carousel-item">
			<img src="/images/sign2.jpg" class="slide3" alt="...">
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

<!------------------------------ End of main images slider section ------------------------------>

<!------------------------------ Start of jumbotron section ------------------------------>



<!------------------------------ End of jumbotron section ------------------------------>

@endsection



