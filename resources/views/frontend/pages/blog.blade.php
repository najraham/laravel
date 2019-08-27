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
						@if (strlen($blog->content)>30)
							{{substr($blog->content, 0, 30)}}
						@else
							{{$blog->content}}
						@endif
						<a href="{{route('show_single_blog' , ['id'=>$blog->id])}}">Continue reading...</a>
					</div>
					@if (!Auth::guest())
						@if ($blog->user->id == Auth::user()->id)
							<button class="btn btn-warning" data-toggle="modal" data-target="#myModal_{{$blog->id}}">Edit</button>
						@endif
					@endif
					{{-- modal --}}
					<div id="myModal_{{$blog->id}}" class="modal fade container" role="dialog">
						<div class="modal-dialog">
								<!-- Modal content-->
							<div class="modal-content">
							
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit Blog</h4>
								</div>
								
								<form action="{{route('edit_blog')}}" method="post">
									@csrf
									<input type="hidden" name="id" value="{{$blog->id}}">
									<div class="modal-body">
										<div class="row">
											<div class="form-group">
												<label for="title">Title</label>
												<input class="form-control" value="{{$blog->title}}" type="text" name="title" id="title">
											</div>
										</div>
											

											<div class="row">
												<div class="form-group">
													<label for="description">Description</label>
													<textarea class="form-control" rows="3" type="text" name="description" id="description">{{$blog->content}}</textarea>
												</div>
											</div>
										
									</div>
									<div class="modal-footer">
										<button class="btn btn-success" type="submit">Save</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
								
								
							</div>
						</div>
					</div>
				</div><!-- /row -->
			</div> <!-- /container -->
		</div><!-- /grey -->
	@endforeach


@endsection
	
	
	