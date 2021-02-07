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
				<div class="col-10 offset-1 text-gray">
					<h1 class="text-center">CONTÁCTANOS</h1>
					<p class="text-wrap text-justify mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dolorem. Perspiciatis dolorum temporibus nemo aperiam adipisci repudiandae, officia at minima veniam recusandae tempore magni, commodi! Eos a est, soluta perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Quod tempora rem sequi magni molestias minus optio, explicabo!</p>
				</div>
			</div>
			
		</div>	
	</section>

	<section>
		<div class="container">
			<div class="row" data-aos="zoom-in" data-aos-duration="1000">
				<div class="col-md-6 text-gray vertical-center">
					<div class="w-100 text-center">
						<img src="http://via.placeholder.com/500x500/?text=imagen" alt="">
					</div>
				</div>
				<div class="col-md-6 vertical-center">
					<div class="w-100">
						<h2 class="text-white text-center"><i class="fas fa-envelope"></i> Contáctanos</h2>
						<p class="text-white text-center">Con gusto te ayudaremos</p>
						<form action="{{ route('postContact') }}" action="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="mb-3">
								<input type="text" name="name" class="form-control" placeholder="* Nombre completo" required>
							</div>
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="* Correo electrónico" required>
							</div>
							<div class="mb-3">
								<input type="text" name="phone" class="form-control" placeholder="Teléfono / Celular">
							</div>
							<div class="mb-3">
								<textarea class="form-control" name="message" rows="5" placeholder="* Mensaje" required></textarea>
							</div>
							<div class="mb-3 text-end">
								<button class="btn btn-primary btn-about">Enviar</button>
							</div>
						</form>
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
