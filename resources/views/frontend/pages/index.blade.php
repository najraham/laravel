@extends('frontend.layouts.layout')

@section('content')
    <!-- +++++ Welcome Section +++++ -->
    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <img src="{{asset('frontend/img/user.png')}}" alt="Stanley">
                    {{-- heading --}}
                    <h1>{{$index->heading}}</h1>
                    {{-- description --}}
                    <p>{{$index->description}}</p>        
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /ww -->
    
    
    <!-- +++++ Projects Section +++++ -->
    
    <div class="container pt">
       
        <?php $i=0; ?>
        @foreach($projects as $project)

            @if($i % 3 == 0)
                <div class="row mt centered">	
            @endif
                <div class="col-lg-4">
                    <a class="zoom green" href="{{$project->project_url}}"><img class="img-responsive" src="{{asset('frontend/img/portfolio/'.$project->project_image)}}" alt="" /></a>
                    <p>{{$project->project_name}}</p>
                </div>

            @if($i % 3 == 2)
                </div><!-- /row -->
            @endif
            <?php $i++; ?>
        @endforeach
        
    </div><!-- /container -->
    
@endsection
    
	