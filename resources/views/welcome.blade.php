@extends('layouts.guest')

@section('guest-content')

<div id="zarasignsMainCarousel" class="carousel slide " data-bs-ride="carousel">
	<div class="carousel-inner" id="zarasignsMainCarouselImagesHolder">
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

	<button class="carousel-control-prev" type="button" data-bs-target="#zarasignsMainCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>

	<button class="carousel-control-next" type="button" data-bs-target="#zarasignsMainCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
  	</button>
</div>

@endsection



