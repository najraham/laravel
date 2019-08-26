@extends('frontend.layouts.layout')

@section('content')

	<!-- +++++ Contact Section +++++ -->
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT ME</h3>
				<hr>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form action="{{route('send_message')}}" method="POST" role="form">
					@csrf
					<div class="form-group">
						<label for="NameInputEmail1">Name</label>
						<input type="name" name="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
						<br>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">E-mail</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						<br>
					</div>
					<div class="form-group">
						<label for="subjectEmail1">Subject</label>
						<input type="text" name="subject" class="form-control" id="subjectEmail1" placeholder="Subject">
						<br>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" name="message" rows="6" id="message" placeholder="Enter your message here"></textarea>
						<br>
					</div>
					<button type="submit" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
@endsection
