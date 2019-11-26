<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Salami Haruna">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title')</title>

    <link rel="canonical" href="{{url('/')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('dist/css/bootstrap-select.min.css')}}" rel="stylesheet" >
    <!-- Custom styles for this template -->
    <link href="{{asset('css/template.css')}}" rel="stylesheet">   
    <link href="{{asset('css/style.css')}}" rel="stylesheet">    
    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
  </head>
  <body>
    <header>
      <div class="container-fuild fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-info">
          <a class="navbar-brand text-white" href="{{url('/')}}">Learnershood</a>
          <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-inverse"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/courses')}}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/contact')}}">Contact Us</a>
              </li>           
              @guest
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/login')}}">LogIn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/register')}}">Register</a>
                </li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{asset('image/image.png')}}" class="rounded profile-menu"  alt="profile menu">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{url('/account')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{url('/library')}}">Notification</a>
                    <a class="dropdown-item" href="{{url('/profile')}}">Account</a>
                    
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Log Out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
              @endguest
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- <div class="container">
      <div class="row col-md-10 offset-md-1 my-0">
        <form class="input-group mb-3">
          <input type="text" class="form-control" placeholder="search for school, department, course" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button type="submit" class="btn btn-info" id="basic-addon2">Search</button>
          </div>
        </form>
      </div>
    </div> -->
    <main role="main">
      @yield('content')
    </main>

    <footer class="bg-secondary text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="h3 text-info mt-3">LEARNERSHOOD</p>
            <p>
              Learnershood is an online educational material sharing portal that leverage on internet (using high level algorithm) to generate a course specific
              content for the user. Student can download their course material from the platform and also compare it with what is taught in other school. 
              Through the internet generated content, the student can also experience real life application of the course through various medium offered on 
              the platform (article, videos and diagram). The platform will also provide a new learning path where student can take a new 
              course (apart from their school work) on the platform.
            </p>
          </div>
          <div class="col-md-4">
            <p class="h3 text-info mt-3">CONTACT US</p>
            <address class="address">
              <i class="fa fa-home text-info"></i> Akure Tech Hub <br/>
              Federal University of Technology, Akure <br/>
              Ondo State, Nigeria.
            </address>
            <p>
              <a class="card-link text-white" href="tel:+234 806-888-1506">
                <i class="fa fa-phone text-info"></i> +234 806-888-1506
              </a><br/>
              <a class="card-link text-white" href="mailto:learnershood.me@gmail.com">
                <i class="fa fa-envelope text-info"></i> learnershood@gmail.com
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{asset('dist/js/jquery-slim.min.js')}}" ></script>
    <script>window.jQuery || document.write('<script src="{{asset('dist/js/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-select.min.js')}}"></script>
    <script>
      $(function() {
      $('.selectpicker').selectpicker();
    });
    </script>
</body>
</html>
