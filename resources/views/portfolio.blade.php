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
					<h1 class="text-center">COMPARTIMOS HISTORIAS DE ÉXITO</h1>
					<p class="text-wrap mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dolorem. Perspiciatis dolorum temporibus nemo aperiam adipisci repudiandae, officia at minima veniam recusandae tempore magni, commodi!</p>
				</div>
			</div>
			
		</div>	
	</section>

	<section class="bg-portfolio pt-5">
		<div class="container">
			<div class="row text-white">
				@php( $j = 1 )
				@for ($i = 1; $i <= 15 ; $i++)
					@if($j == 1) @php($aos = 'flip-left') @endif
					@if($j == 2) @php($aos = 'flip-up') @endif
					@if($j == 3) @php($aos = 'flip-right') @endif
					<div class="col-6 col-md-4 mt-5" data-aos="{{ $aos }}" data-aos-duration="1000">
						<div class="unit-portfolio">
							<img src="{{ env('APP_URL') }}/assets/images/portfolio/portfolio_{{ $i <= 9 ? '0'.$i : $i }}.png" class="img-portfolio w-100">
						</div>
					</div>
					@php( $j++ )
					@if($j == 4) @php($j = 1) @endif
				@endfor
			</div>
			
		</div>	
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
	<div class="modal" tabindex="-1" id="modalPortfolio">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Modal title</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <p>Modal body text goes here.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('scripts')
@endsection
