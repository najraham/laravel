@extends('frontend.layouts.layout')

@section('content')
	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				{{-- heading --}}
				<h3>{{$work->heading}}</h3>
				<hr>
				{{-- description --}}
				<p>{!!$work->description!!}</p>
			</div>
		</div>
		@foreach ($projects->chunk(3) as $chunk)
			<div class="row mt centered">	
				@foreach ($chunk as $project)
					<div class="col-lg-4">
						<a class="zoom green" 
							href="{{$project->project_url}}"
						>
							<img class="img-responsive" 
								src="{{asset('frontend/img/portfolio/'.$project->project_image)}}" 
								alt="" 
							/>
						</a>
						<p>{{$project->project_name}}</p>
					</div>
				@endforeach
			</div><!-- /row -->
		@endforeach
	</div><!-- /container -->
@endsection
	