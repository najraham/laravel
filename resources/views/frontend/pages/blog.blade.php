@extends('frontend.layouts.layout')

@section('content')

	<div class="col text-right">
		<a href="{{route('show_new_blog_page')}}" class="btn btn-sm btn-success">Add new</a>
	</div>
	<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	@foreach ($blogs as $blog)
		<div id="grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						{{-- Image --}}
						{{-- author --}}
						<p><b>By: {{$blog->user->name}}</b></p>
						{{-- created at --}}
						<p><b>{{$blog->created_at->diffForHumans()}}</b></p>
						{{-- title --}}
						{{-- route --}}
						<h4>{{$blog->title}}</h4>
						{{-- content --}}
						{!!$blog->content!!}
						<a href="{{route('show_single_blog' , ['id'=>$blog->id])}}">Continue reading...</a>
					</div>
				</div><!-- /row -->
			</div> <!-- /container -->
		</div><!-- /grey -->
	@endforeach


@endsection
	
	
	