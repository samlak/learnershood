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
    <div class="body-space-3"></div> 
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-2 col-md-12 col-sm-12 container mt-2 pb-4 bg-light">
      
          <nav class="menu mt-4">
            <ul id="menu" class="nav flex-column font-weight-bold">
              <li id="notificationButton" class="nav-item collapsed pl-1" data-toggle="collapse" data-target="#notification" aria-expanded="false" aria-controls="notification"><i class="fa fa-bell text-info"></i> Notification <span class="badge badge-info">2</span>
              </li>
              <ul id="notification" class="nav t-12 collapse pl-2" aria-labelledby="notificationButton" data-parent="#menu">
                <li class="nav-item"><a href="" class="special-link">You have been assigned to a peer group</a></li>
                <li class="nav-item"><a href="" class="special-link">You can now access 21st Century Skill Masterclass course content</a></li>
              </ul>

              <li id="peerButton" class="nav-item collapsed pt-2 pl-1" data-toggle="collapse" data-target="#peer" aria-expanded="false" aria-controls="peer"><i class="fa fa-user text-info"></i> Peer Discussion
              </li>
              <ul id="peer" class="nav t-12 collapse pl-2" aria-labelledby="peerButton" data-parent="#menu">
                <li class="nav-item"><a href="" class="special-link"> Adebisi share a document at G7 Coder </a></li>
                <li class="nav-item"><a href="" class="special-link"> 5 new messages from G7 Coder </a></li>
              </ul>

              <li id="forumButton" class="nav-item pt-2 pl-1" ><i class="fa fa-users text-info"></i> Forum Discussion
              </li>

              <li id="projectButton" class="nav-item collapsed pt-2 pl-1" data-toggle="collapse" data-target="#project" aria-expanded="false" aria-controls="project"><i class="fa fa-money text-info"></i> Project Evaluation
              </li>
              <ul id="project" class="nav t-12 collapse pl-2" aria-labelledby="projectButton" data-parent="#menu">
                <li class="nav-item"><a href="" class="special-link"> Omotomiwa's Project </a></li>
                <li class="nav-item"><a href="" class="special-link"> Kolade's Project </a></li>
              </ul>

              <li id="courseButton" class="nav-item collapsed pt-2 pl-1" data-toggle="collapse" data-target="#course" aria-expanded="false" aria-controls="course"><i class="fa fa-book text-info"></i> Courses
              </li>
              <ul id="course" class="nav t-12 collapse pl-2" aria-labelledby="courseButton" data-parent="#menu">
                <li class="nav-item"><a href="" class="special-link"> 21st Century Skill Masterclass </a></li>
                <li class="nav-item"><a href="" class="special-link"> Web Development Masterclass </a></li>
              </ul>

              <li id="mentorButton" class="nav-item pt-2 pl-1" ><i class="fa fa-user text-info"></i> Mentor
              </li>
            </ul>
          </nav>
        </div>

        <div class="col-lg-10 col-md-12 col-sm-12 container mt-4 px-4">
          <main role="main"> 
            @yield('content')
          </main>

          <hr>
          <footer class="">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">Learnershood &copy; 2019</p>
                </div>
              </div>
            </div>
          </footer>
        </div> 

      </div>
    </div>

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
