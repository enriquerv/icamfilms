@extends('layout.principal')

@section('title')
	{{ $title }}
@endsection

@section('styles')
@endsection

@section('content')
	
	<section class="first-section bg-aboutus vertical-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-gray">
					<h1 class="text-center">CUENTA CON NOSOTROS</h1>
					<p class="text-wrap text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dolorem. Perspiciatis dolorum temporibus nemo aperiam adipisci repudiandae, officia at minima veniam recusandae tempore magni, commodi! Eos a est, soluta perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Quod tempora rem sequi magni molestias minus optio, explicabo!</p>
				</div>
			</div>
			
		</div>	
	</section>

	<section class="bg-team pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team1.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #1</strong></label><br>
						<label class="mb-1"><small>Diseñador Gráfico</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>
					</p>
				</div>
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team2.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #2</strong></label><br>
						<label class="mb-1"><small>Diseñador Multimedia</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>
					</p>
				</div>
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team3.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #3</strong></label><br>
						<label class="mb-1"><small>Director de Escena</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>
					</p>
				</div>
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team4.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #4</strong></label><br>
						<label class="mb-1"><small>Fotografía</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>	
					</p>
				</div>
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team5.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #5</strong></label><br>
						<label class="mb-1"><small>Diseñador Multimedia</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>	
					</p>
				</div>
				<div class="col-md-4 text-center" data-aos="flip-left" data-aos-duration="1000">
					<img src="{{ env('APP_URL') }}/assets/images/team/team6.jpeg" class="img-team">
					<p class="mt-3 col-8 offset-2">
						<label><strong>INTEGRANTE #6</strong></label><br>
						<label class="mb-1"><small>Diseñador Gráfico</small></label><br>
						<label class="mb-1">
							<a href="#"><i class="fab fa-team fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-team fa-instagram-square"></i></a>
							<a href="#"><i class="fab fa-team fa-linkedin"></i></a>
						</label>
						<br>	
					</p>
				</div>
			</div>
			
		</div>	
	</section>

	<section class="text-center">
		<div class="container-fuid">
			<div class="row ms-0 me-0">
				<div class="col-md-6 bg-mision vertical-center">
					<div class="row title-mision-vision pt-3">
						<h1 class="text-center mb-4">Misión</h1>
						<div class="col-10 offset-1">
							<p class="text-justify mb-5">
								Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Beatae corrupti nemo rerum iste modi, dolorum repellendus debitis temporibus nobis dicta vitae amet non explicabo, sunt in nesciunt. Non, totam, ipsa temporibus nobis dicta vitae amet non explicabo, sunt in nesciunt. Non, totam, ipsa!
							</p>
						</div>	
					</div>
					
				</div>
				<div class="col-md-6 bg-vision vertical-center">
					<div class="row title-mision-vision pt-3">
						<h1 class="text-center mb-4">Visión</h1>
						<div class="col-10 offset-1">
							<p class="text-justify mb-5">
								Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Beatae corrupti nemo rerum iste modi, dolorum repellendus debitis temporibus nobis dicta vitae amet non explicabo, sunt in nesciunt. Non, totam, ipsa temporibus nobis dicta vitae amet non explicabo, sunt in nesciunt. Non, totam, ipsa!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-values mt-5 pt-5">
		<h1 class="text-center">NUESTROS VALORES</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-12 pb-5 mb-5 row">
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/commitment.png" class="img-valores"><br>
						<label class="mt-2"><strong>COMPROMISO</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/creativity.png" class="img-valores"><br>
						<label class="mt-2"><strong>CREATIVIDAD</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/growth.png" class="img-valores"><br>
						<label class="mt-2"><strong>CRECIMIENTO</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/innovation.png" class="img-valores"><br>
						<label class="mt-2"><strong>INNOVACIÓN</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/integrity.png" class="img-valores"><br>
						<label class="mt-2"><strong>INTEGRIDAD</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/passion.png" class="img-valores"><br>
						<label class="mt-2"><strong>PASIÓN</strong></label>
					</div>	
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/commitment.png" class="img-valores"><br>
						<label class="mt-2"><strong>COMPROMISO</strong></label>
					</div>
					<div class="col-md-3 text-center mt-5" data-aos="flip-left" data-aos-duration="1000">
						<img src="{{ env('APP_URL') }}/assets/images/valores/creativity.png" class="img-valores"><br>
						<label class="mt-2"><strong>CREATIVIDAD</strong></label>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section class="bg-ateam-div mt-5 pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 px-0 bg-ateam bg-ateam1" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-4 px-0 bg-ateam bg-ateam2" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-4 px-0 bg-ateam bg-ateam3" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-6 px-0 bg-ateam bg-ateam4" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-6 px-0 bg-ateam bg-ateam5" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-3 px-0 bg-ateam bg-ateam6" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-3 px-0 bg-ateam bg-ateam7" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-3 px-0 bg-ateam bg-ateam8" data-aos="zoom-in" data-aos-duration="2000"></div>
				<div class="col-md-3 px-0 bg-ateam bg-ateam9" data-aos="zoom-in" data-aos-duration="2000"></div>
			</div>
		</div>	
	</section>


	
	

@endsection

@section('modal-section')
@endsection

@section('scripts')
@endsection
