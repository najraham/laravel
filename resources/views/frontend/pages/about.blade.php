@extends('frontend.layouts.layout')

@section('content')
	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					{{-- image --}}
					<img src="{{asset('frontend/img/'.$about->image)}}" alt="Stanley">
					{{-- heading --}}
					<h1>{{$about->heading}}</h1>
					{{-- description --}}
					<p>{{$about->description}}</p>		
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
		</div> <!-- /container -->
	</div><!-- /ww -->


	<!-- +++++ Information Section +++++ -->

	<div class="container pt">
		<div class="row mt centered">
			<div class="col-lg">
				<h4>THE SKILLS</h4>
				@foreach ($skills as $skill)
					{{-- heading --}}
					{{$skill->heading}}
					<div class="progress">
						{{-- progress value --}}
						<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->progress_value}}%;">
							{{-- <span class="sr-only">60% Complete</span> --}}
						</div>
					</div>
				@endforeach
			</div><!-- /col-lg-6 -->
		</div><!-- /row -->
	</div><!-- /container -->
@endsection
