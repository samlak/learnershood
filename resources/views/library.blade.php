@section('title')
  Library - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">Library</p>
      <div class="row mt-3">
        <div class="col-12">
          <p class="clearfix">
            <span class=" lead font-weight-bolder">Materials in the Library</span>
            <a href="{{url('/submit')}}}" class="btn btn-info float-right"> Submit your material</a>
          </p>
        </div>
        <div class="col-12">
          <div class="row mt-0">
            @foreach($library as $course)
              <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body p-2">
                    <a href="{{url('/preview/'.$course->courseMaterial->token)}}" class="special-link card-link card-font">{{$course->courseMaterial->name}}</a><br>
                    <a href="{{url('/course/'.$course->courseMaterial->school->short_name.'/'.$course->courseMaterial->course->code)}}" class="card-link card-font text-uppercase">{{$course->courseMaterial->course->code}}</a><br>
                    <p class="card-text card-font m-0 text-primary">{{$course->courseMaterial->file_type}}</p>
                    <a href="#" class="card-link card-font">Download ({{$course->courseMaterial->file_size}})</a><br>
                    <a href="{{url('/preview/'.$course->courseMaterial->token)}}" class="card-link card-font">Read Online</a>
                  </div>
                </div>
              </div>  
            @endforeach
          </div>
          <div class="float-right">{!! $library->render() !!}</div>
        </div>
      </div>
    </div>
  </div> 
@endsection