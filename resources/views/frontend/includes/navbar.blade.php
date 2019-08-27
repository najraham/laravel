<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="dropdown">
                <a class="navbar-brand" href="#" role="button" data-toggle="dropdown">
                    <span class="mb-0 text-sm  font-weight-bold">Welcome!</span>
                </a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('showIndex')}}">Home</a></li>
                <li><a href="{{route('showWork')}}">Work</a></li>
                <li><a href="{{route('showAbout')}}">About</a></li>
                <li><a href="{{route('show_blogs')}}">Blogs</a></li>
                <li><a href="{{route('show_contact')}}">Contact</a></li>
                
                @if (Auth::guest())
                    <li><a>|</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @elseif((Auth::user()->role)==1)
                    <li><a>|</a></li>
                    <li><a href="{{route('show_dashboard_index')}}">Dashboard</a></li>
                    <li><a>|</a></li>
                    <li>
                        <a class="navbar-brand" href="#" role="button" data-toggle="dropdown">
                            <span class="mb-0 text-sm">{{Auth::user()->name}}</span>
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
                    </li>
                @else
                    <li><a>|</a></li>
                    <li>
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <span class="mb-0 text-sm"><b>{{Auth::user()->name}}</b></span>
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
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>