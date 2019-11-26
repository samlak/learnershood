@section('title')
  Learnershood
@endsection 
@extends('layouts.template')   
@section('content')

  <div class="body-space-5"></div>

  <div class="container">
    <p class="h2 text-center font-weight-bolder p-1">Courses Available</p>
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
                </div>
                <div class="card-text">
                  <strong>
                    <span class="float-left"><i class="fa fa-user"></i> 6 weeks </span>
                    <span class="float-right"><i class="fa fa-money"></i>  <i class="fa">#</i>50,000 </span>
                  </strong>
                </div>
                <center><a href="#" class="btn btn-info mt-2">Enroll Now </a></center>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
      <center><a class="btn btn-info mb-3" href="{{url('/schools')}}" role="button">Pagination</a></center>
  </div>

@endsection