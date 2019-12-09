@section('title')
  Course Content - Learnershood
@endsection 
@extends('layouts.account-template')   
@section('content')  
  <div class="container">
    <p class="h2 text-center font-weight-bolder">{{"Introduction to Web Development"}}</p>
    
    <div class="text-center mt-2">
      <!-- <video class="card-img-top"><source src="{{asset('video/learn.mp4')}}" type="video/mp4"></video> -->
      <img class="card-img-top" height="400px" src="{{asset('image/coders.jpg')}}" alt="Course display Image">
    </div>
    <hr>

    <div>
      <p class="card-text">
        This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
        with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
        CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
        web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
      </p>
      <p class="card-text">
        This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
        with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
        CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
        web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
      </p>
      <p class="card-text">
        This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
        with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
        CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
        web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
      </p>
      <p class="card-text">
        This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
        with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
        CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
        web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
      </p>
      <p class="card-text">
        This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill 
        with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your web project. This course will tech you HTML, 
        CSS, Javascript and also sharpen your skill with React. No coding experience required. This course is design to kickstar your career into tech by focusing on Frontend and React as a tool for your 
        web project. This course will tech you HTML, CSS, Javascript and also sharpen your skill with React. No coding experience required.
      </p>
    </div>  
    <hr>

    <div class="text-center">
      <a href="" class="btn btn-info m-2">Previous Lesson </a>
      <a href="" class="btn btn-info m-2">Next Lesson</a>
    </div>
    <hr>

    <div class="font-weight-bold text-center text-info p-2 mb-2">
      <span class="h3">Course Outline</span>
    </div>
    <div class="accordion mb-2" id="courseOutline">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <div class="text-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <a href=""><i class="fa fa-plus text-info"></i></a> MODULE ONE (WHY WEB ?)
            </div>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#courseOutline">
          <div class="card-body py-0">
            <ul class="list-group mx-4 border-0">
              <li class="list-group-item "><a class="text-info special-link" href=""> Introduction to web</a></li>
              <li class="list-group-item"><a class="text-info special-link" href="">History of web</a></li>
              <li class="list-group-item"><a class="text-info special-link" href="">Who is a web developer?</a></li>
              <li class="list-group-item"><a class="text-info special-link" href="">Different between a web developer and software engineer</a></li>
              <li class="list-group-item"><a class="text-info special-link" href="">Why you should be a web developer?</a></li>
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
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#courseOutline">
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
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#courseOutline">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
    <hr>
    
    <div class="font-weight-bold text-info bg-light rounded p-2 mb-2">
      <span class="">Question and Answer (50)</span>
      <a href="" class="float-right special-link">Ask in the Forum</a>
    </div>

    <div class="">
      <form >
        <div class="form-group row mx-1">
          <textarea class="form-control col-9 mr-2" name="comment" id="" cols="30" rows="1"></textarea>
          <input class="form-control col-2 ml-2 btn btn-info" type="submit" value="Post">
        </div>
      </form>
    </div>
  </div>
@endsection