@section('title')
  User Dashboard - Learnershood
@endsection 
@extends('layouts.account-template')   
@section('content')  

        <p class="h2 text-center font-weight-bolder">Courses Taken</p>
        <div class="row">
          @foreach($library as $school)
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
              <div class="shadow bg-white rounded clearfix">
                <div class="card">
                  <img class="card-img-top" height="185px" src="{{asset('image/coders.jpg')}}" alt="Course display Image">
                  <div class="card-body p-2">
                    <div class="card-title"><strong><i class="fa fa-book"></i>Frontend Development with React </strong></div>
                    <p class="card-text">
                      <span class="t-12">This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS,
                        Javascript and also sharpen your skill with React. No coding experience required.
                      </span>
                    </p>
                    <div class="card-text">
                      <strong>
                        <span class="float-left"><i class="fa fa-users"></i> 200 Students </span>
                        <span class="float-right"><i class="fa fa-user"></i> 4 Instructors </span>
                      </strong>
                    </div><br/>
                    <div class="card-text">
                      <strong>
                        <span class="float-left"><i class="fa fa-user"></i> 12 Weeks </span>
                        <span class="float-right"><i class="fa fa-money"></i>  <i class="fa">#</i>50,000 </span>
                      </strong>
                    </div><br/>
                    <div class="progress my-2" style="height: 10px;">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%; font-size: 9px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <center>
                      <a href="{{url('/course/test')}}" class="btn btn-secondary btn-sm mt-2">Progress </a>
                      <a href="{{url('/course/test')}}" class="btn btn-info btn-sm mt-2">Continue </a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <hr>
        <p class="h2 text-center font-weight-bolder">Courses Available</p>
        <div class="row">
          @foreach($library as $school)
            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
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
                    <div class="progress my-2" style="height: 10px;">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%; font-size: 9px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <center>
                      <a href="#" class="btn btn-secondary btn-sm mt-2">Progress </a>
                      <a href="#" class="btn btn-info btn-sm mt-2">Continue </a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
@endsection