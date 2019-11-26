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
  </head>
  <body>
    

    @yield('content')

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
