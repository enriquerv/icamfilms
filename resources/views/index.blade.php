@extends('layout.principal')

@section('title')
	{{ $title }}
@endsection

@section('styles')
@endsection

@section('content')
	
	<section class="first-section">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="http://via.placeholder.com/1290x620/000000?text=imagen_1" class="d-block w-100 img-banner">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 class="bolder">TÍTULO DESCRIPTIVO UNO</h1>
		        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum beatae totam, amet.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="http://via.placeholder.com/1290x620/000000?text=imagen_2" class="d-block w-100 img-banner">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 class="bolder">TÍTULO DESCRIPTIVO DOS</h1>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit adipiscing elit r sit amet.</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="http://via.placeholder.com/1290x620/000000?text=imagen_3" class="d-block w-100 img-banner">
		      <div class="carousel-caption d-none d-md-block">
		        <h1 class="bolder">TÍTULO DESCRIPTIVO TRES</h1>
		        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur isl consectetur.</p>
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </a>
		</div>
	</section>		

	<section class="pt-5 pb-5 bg-icam">
		<div class="container position-relative">
			<div class="row">
				<div class="col-10 offset-1">
					<p class="title-about text-white">ACERCA DE</p>
					<hr>
					<div class="row pt-5">
						<div class="col-md-7 text-white">
							<h3 class="bolder">ICAM FILMS</h3>
							<p>
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus laborum, ex harum molestias ad, quod sed deleniti fugiat pariatur quisquam adipisci, itaque aliquam vero consequuntur eius velit? Doloribus, cupiditate.
							</p>
							<p>
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus laborum, ex harum molestias ad, quod sed deleniti fugiat pariatur quisquam adipisci, itaque aliquam vero consequuntur eius velit? Doloribus, cupiditate.
							</p>
							<p class="text-center mt-4">
								<a href="{{ URL::route('aboutus') }}"><button class="btn btn-primary btn-about">Conoce más</button></a>
							</p>
						</div>
						<div class="col-md-5 text-center" data-aos="flip-left" data-aos-duration="1000">
							<img src="https://via.placeholder.com/300x500?text=Imagen" width="60%">
						</div>
					</div>		
				</div>
			</div>
		</div>
	</section>
	<section>
		<iframe width="100%" height="600" src="https://www.youtube.com/embed/oM1WrCJWN2k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</section>
	<section class="bg-values mt-5 pt-5 text-white">
		<div class="container">
			<h2 class="text-center mb-5">NUESTROS CLIENTES</h2>
			<div id="carouselClients" class="carousel slide pt-5 mt-5 pb-5 mb-5" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselClients" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselClients" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselClients" data-bs-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 1" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 2" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 3" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 4" class="img-clients w-100">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 5" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 6" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 7" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 8" class="img-clients w-100">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 9" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 10" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 11" class="img-clients w-100">
							</div>
							<div class="col-3 text-center">
								<img src="http://via.placeholder.com/200x200/ffffff?text=cliente 12" class="img-clients w-100">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section class="container-fliud pt-5 pb-5 section-contact">
		<div class="row m-0">
			<div class="col-md-10 offset-md-1 row">
				<div class="col-md-6 mt-3 text-center">
					<img src="https://via.placeholder.com/400?text=Imagen" width="100%" class="img-contact-banner"> 
				</div>
				<div class="col-md-6 mt-3 vertical-center_2">
					<div>
						<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Debitis consequuntur nulla molestiae excepturi est voluptates quam quos magni alias? Repellendus, suscipit. Libero nulla deserunt neque suscipit natus earum distinctio excepturi.</p>	
						<a href="#"><button class="btn btn-primary btn-about mt-4">Contáctanos</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('modal-section')
@endsection

@section('scripts')
@endsection
