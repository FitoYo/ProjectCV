@extends('layouts.template')

@section('content')

	<div class="container-fluid">
		
		<h1><span class="badge bg-success d-block">Title Page</span></h1>
		
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="https://picsum.photos/1000/300?random=1" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="https://picsum.photos/1000/300?random=2" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="https://picsum.photos/1000/300?random=3" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="https://picsum.photos/1000/300?random=4" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="https://picsum.photos/1000/300?random=5" class="d-block w-100">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>

	</div>

	<script type="{{ asset('js/app.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection