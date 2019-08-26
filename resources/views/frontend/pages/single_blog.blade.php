@extends('frontend.layouts.layout')

@section('content')
	<!-- +++++ Post +++++ -->
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<p><b>By: {{Auth::user()->find($blog->user_id)->name}}</b></p>
					<p><b>{{$blog->created_at->diffForHumans()}}</b></p>
					<h4>{{$blog->title}}</h4>
					<p><img class="img-responsive" src="assets/img/blog01.jpg" alt=""></p>
					{{$blog->content}}
					<hr>
					<p><a href="{{route('show_blogs')}}" type="button" class="btn btn-primary">Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
@endsection
	
