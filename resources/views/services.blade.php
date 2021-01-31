@extends('layout.principal')

@section('title')
	{{ $title }}
@endsection

@section('styles')
@endsection

@section('content')
	
	<section class="first-section main-services vertical-center">
		<div class="container">
			<div class="row" data-aos="zoom-in" data-aos-duration="1000">
				<div class="col-8 offset-2 text-gray">
					<h1 class="text-center">¿QUÉ ES LO QUE HACEMOS?</h1>
					<p class="text-wrap mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dolorem. Perspiciatis dolorum temporibus nemo aperiam adipisci repudiandae, officia at minima veniam recusandae tempore magni, commodi!</p>
				</div>
			</div>
			
		</div>	
	</section>

	<section class="bg-services pt-5">
		<div class="container">
			<div class="row text-white">
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fas fa-camera fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Fotografía editorial</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fas fa-video fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Dirección</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fas fa-photo-video fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Edición de Video</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fas fa-chart-line fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Marketing digital</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fab fa-codepen fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Animación</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
				<div class="col-md-4 p-5" data-aos="flip-left" data-aos-duration="1000">
					<div class="unit-service">
						<i class="fas fa-microphone-alt fa-services"></i>
						<p class="mt-3">
							<label class="title-services mb-2"><strong>Spots de radio</strong></label><br>
							<label class="text-services mb-1"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure, accusantium.</small></label><br>
						</p>
					</div>
				</div>
			</div>
			
		</div>	
	</section>

	<section class="bg-values mt-md-5 pt-md-5 text-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 vertical-center why-vertical mb-3">
					<div class="text-center w-100">
						<img src="{{ env('APP_URL') }}/assets/images/services/whychooseus.png" class="whychooseus-img">
					</div>
				</div>
				<div class="col-md-6 vertical-center why-vertical">
					<div class="p-md-5">
						<h2 class="text-left px-3 py-3 px-md-5 mb-md-5">¿POR QUÉ ELEGIRNOS?</h2>
						<p class="px-3 py-3 px-md-5 py-md-3 mt-md-5">
							Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Voluptas aliquam, beatae dolorum iusto sequi deserunt facere quos maiores voluptates dolor possimus autem doloribus.
						</p>
						<p class="px-3 py-3 px-md-5 py-md-3">
							Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Voluptas aliquam, beatae dolorum iusto sequi deserunt facere quos maiores voluptates dolor.
						</p>
						<p class="px-3 py-3 px-md-5 py-md-3">
							<a href="{{ URL::route('aboutus') }}"><button class="btn btn-primary btn-about" id="goToAboutUs">Conoce más</button></a>
						</p>	
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
					<div class="px-4">
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
