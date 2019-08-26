<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    DASH
  </title>
  <!-- Favicon -->
  <link href="{{asset('backend/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('backend/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('backend/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />

  <style>
    .multiline_td{
      white-space:pre-wrap !important;
      word-wrap:break-world !important;
    }
  </style>
</head>

<body class="">
  
  @include('backend.includes.sidenav')

  <div class="main-content">

    @include('backend.includes.navbar')
    
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      
    </div>
    
    <div class="container-fluid mt--9">

      @include('frontend.includes.messages')
      
      @yield('content')
      
      @include('backend.includes.footer')
    </div>
  </div>
  <!--   Core   -->
  <script src="{{asset('backend/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('backend/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('backend/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('backend/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>