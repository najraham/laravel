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
					<p class="multitline_p">{{$blog->content}}</p>
					
					<hr>
					<p><a href="{{route('show_blogs')}}" type="button" class="btn btn-primary">Back</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
@endsection
	
