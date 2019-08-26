<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Brand -->
          <a class="navbar-brand pt-0" href="{{route('show_dashboard_index')}}">
            <img src="{{asset('backend/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
          </a>
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="{{asset('backend/img/brand/blue.png')}}">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item ">
              <a class=" nav-link active " href=" {{route('show_dashboard_index')}}"> <i class="ni ni-tv-2 text-primary"></i> Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('show_blog')}}">
                  <i class="ni ni-planet text-blue"></i> Blogs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('show_index')}}">
                  <i class="ni ni-pin-3 text-orange"></i> Index
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('show_work')}}">
                  <i class="ni ni-single-02 text-yellow"></i> Works
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('show_about')}}">
                  <i class="ni ni-bullet-list-67 text-red"></i> About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('show_skill')}}">
                  <i class="ni ni-key-25 text-info"></i> Skills
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('show_projects')}}">
                  <i class="ni ni-circle-08 text-pink"></i> Projects
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>