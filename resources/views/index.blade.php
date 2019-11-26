@section('title')
  Learnershood
@endsection 
@extends('layouts.template')   
@section('content')

  <div class="body-space-3"></div>

  <div id="frontPageCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#frontPageCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#frontPageCarousel" data-slide-to="1"></li>
      <li data-target="#frontPageCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" height="400px" src="{{asset('image/earth.PNG')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-4">First Slide</h5>
          <p class="lead">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" height="400px" src="{{asset('image/earth.PNG')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second Slide</h5>
          <p>This is the text under it</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" height="400px" src="{{asset('image/earth.PNG')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third Slide</h5>
          <p>This is the text under it</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#frontPageCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#frontPageCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div class="container-fluid bg-light">
    <h2 class="text-center font-weight-bolder py-3">How we work</h2>
    <div class="row mx-3">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
        <div class="text-center clearfix">
          <img class="rounded-circle" height="185px" src="{{asset('image/image.png')}}" alt="">
          <h3>Title is sweat</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
        <div class="text-center clearfix">
          <img class="rounded-circle" height="185px" src="{{asset('image/image.png')}}" alt="">
          <h3>Title is sweat</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
        <div class="text-center clearfix">
          <img class="rounded-circle" height="185px" src="{{asset('image/image.png')}}" alt="">
          <h3>Title is sweat</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
        <div class="text-center clearfix">
          <img class="rounded-circle" height="185px" src="{{asset('image/image.png')}}" alt="">
          <h3>Title is sweat</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
    </div>
    <center><a href="#" class="btn btn-info my-3">View Available Course</a></center>
  </div>

  <div class="container mt-2">
    <p class="h2 text-center font-weight-bolder">Featured Courses</p>
    <div class="row">
      @foreach($schools as $school)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="shadow bg-white rounded clearfix">
            <div class="card">
              <img class="card-img-top" height="185px" src="{{asset('image/earth.PNG')}}" alt="Course display Image">
              <div class="card-body p-2">
                <div class="card-title"><strong><i class="fa fa-book"></i> 21st Century Skill Masterclass </strong></div>
                <p class="card-text">
                  <span class="t-12">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on 
                    the card title and make up the bulk of the card's content. </span>
                </p>
                <div class="card-text">
                  <strong>
                    <span class="float-left"><i class="fa fa-users"></i> 20 student </span>
                    <span class="float-right"><i class="fa fa-pen"></i> 5 Modules </span>
                  </strong>
                </div><br/>
                <div class="card-text">
                  <strong>
                    <span class="float-left"><i class="fa fa-user"></i> 6 weeks </span>
                    <span class="float-right"><i class="fa fa-money"></i>  <i class="fa">#</i>50,000 </span>
                  </strong>
                </div><br/>
                <center><a href="#" class="btn btn-info mt-2">Enroll Now </a></center>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
      <center><a class="btn btn-info mb-3" href="{{url('/schools')}}" role="button">View all available courses</a></center>
  </div>

@endsection