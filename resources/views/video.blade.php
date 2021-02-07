@extends('layout.principal')

@section('title')
	{{ $title }}
@endsection

@section('content')

<section>
	<div class="main"> 
	    <video class="video-background" controls muted autoplay loop>
	      <source src="{{ env('APP_URL') }}/assets/videos/reel_empresarial.mp4" type="video/mp4">
	      Your browser does not support the video tag.
	    </video>
	</div>
</section>
	

@endsection
	
@section('styles')
	<style>
		.main {
		    width: 100%;
		    height: 40vw;
		    overflow: hidden;
		    position: relative;
		}
		.main-title{
			color: #ffffff;
		    text-align: center;
		    top: 50%;
		    transform: translateY(-50%);
		    position: absolute;
		    width: 100%;
		    font-weight: bold;
		    background: #000000c7;
		    padding: 20px 0;
		}

		.video-background {
		    width: 100%; 
		    height: 100%;
		    position: absolute;
		    left: 0;
		    top: 0;
		    z-index: -1;
		}

	</style>
@endsection

@section('modal-section')
@endsection

@section('scripts')

	<script>
		function scaleToFill() {
		    $('video.video-background').each(function(index, videoTag) {
		       var $video = $(videoTag),
		           videoRatio = videoTag.videoWidth / videoTag.videoHeight,
		           tagRatio = $video.width() / $video.height(),
		           val;
		        
		       if (videoRatio < tagRatio) {
		           val = tagRatio / videoRatio * 1.02;
		       } else if (tagRatio < videoRatio) {
		           val = videoRatio / tagRatio * 1.02;
		       }
		       
		       $video.css('transform','scale(' + val  + ',' + val + ')');

		    });    
		}

		$(function () {
			height = $(window).height() - 106.3;
			$(".main").height(height);
		    scaleToFill();
		    $('.video-background').on('loadeddata', scaleToFill);
		    $(window).resize(function() {
		        scaleToFill();
		    });
		});
	</script>
@endsection
