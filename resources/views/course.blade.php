@section('title')
  Frontend Development with React - Learnershood
@endsection 
@extends('layouts.template')   
@section('content')
  <div class="body-space-3"></div> 
  <div class="container">
    <div class="font-weight-bold text-info bg-light mt-4 rounded p-2">
      <h3 class="text-center">FRONTEND DEVELOPMENT WITH REACT</h3>
    </div>
    <div class="text-center mt-2">
      <!-- <video class="card-img-top"><source src="{{asset('video/learn.mp4')}}" type="video/mp4"></video> -->
      <img class="card-img-top"  src="{{asset('image/coders.jpg')}}" alt="Course display Image">
    </div>
    <div class="font-weight-bold text-info bg-light rounded p-2 mb-2">
      <span class="h3">Description</span>
      <span class="float-right">
        <i class="fa fa-money"></i>  <i class="fa">#</i>50,000  
        <a href="" class="btn btn-info btn-sm">Enroll Now</a>
      </span>
    </div>
    <p class="card-text">
      This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
      with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
      CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
      web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
    </p>
    <div class="font-weight-bold text-info bg-light rounded p-2 mb-2">
      <span class="h3">Instructor (6)</span>
    </div>
    <div class="row">
      @foreach($schools as $school)
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="text-center clearfix">
          <img class="rounded-circle" width="150px" height="150px" src="{{asset('image/developer.jpg')}}" alt="">
          <h3>Adewale Musa (Andela)</h3>
          <div>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
          <p>I have 5 years of experience writing code. I have worked at Vogue Pay, Internswitch and currently at Andela. I have work with company in US like Github. My day to day activities involve working with 
            developer from other part of the world to diliver high quality code.
          </p>
        </div>
      </div>
      @endforeach
    </div>

    <div class="font-weight-bold text-info bg-light rounded p-2 mb-2">
      <span class="h3">Course Content</span>
    </div>

    <div class="accordion mb-2" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <div class="text-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <a href=""><i class="fa fa-plus text-info"></i></a> MODULE ONE
            </div>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body py-0">
            <ul class="list-group mx-4 border-0">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <div class="text-info" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <a href=""><i class="fa fa-plus text-info"></i></a> MODULE TWO
            </div>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <div class="text-info" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <a href=""><i class="fa fa-plus text-info"></i></a> MODULE THREE
            </div>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>

    <button class="btn btn-info btn-block font-weight-bold p-2 mb-2">Enroll Now</button>

  </div>
@endsection