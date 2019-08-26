<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="dropdown">
                @if (Auth::guest())
                    <a class="navbar-brand" href="#" role="button" data-toggle="dropdown">
                        <span class="mb-0 text-sm  font-weight-bold">Welcome!</span>
                    </a>
                @else
                    
                    <a class="navbar-brand" href="#" role="button" data-toggle="dropdown">
                        <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('show_work')}}">Work</a></li>
                <li><a href="{{route('show_about')}}">About</a></li>
                <li><a href="{{route('show_blogs')}}">Blogs</a></li>
                <li><a href="{{route('show_contact')}}">Contact</a></li>
                @if (Auth::guest())
                    <li><a>|</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @elseif((Auth::user()->id)==1)
                    <li><a href="{{route('show_dashboard_index')}}">Dashboard</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>