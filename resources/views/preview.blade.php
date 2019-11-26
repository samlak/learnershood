@section('title')
  {{$courseMaterial->name}} ({{$courseMaterial->course->code}}) - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <div class="row">
        <div class="col-lg-12">
          <p class="lead font-weight-bolder text-uppercase m-0">{{$courseMaterial->name}} ({{$courseMaterial->course->code}})</p>
          <a href="{{url('/course/'.$courseMaterial->school->short_name.'/'.$courseMaterial->course->code)}}" class="font-weight-bold text-capitalize m-0">{{$courseMaterial->course->title}}</a><br/>
          <a href="{{url('/department/'.$courseMaterial->school->short_name.'/'.$courseMaterial->department->short_name)}}" class="font-weight-bold text-capitalize m-0">{{$courseMaterial->department->full_name}}</a><br/>
          <a href="{{url('/school/'.$courseMaterial->school->short_name)}}" class="font-weight-bold text-capitalize m-0">{{$courseMaterial->school->full_name}}</a>
          <p class="font-weight-normal text-capitalize m-0">{{$courseMaterial->downloads->count()}} Download {{$courseMaterial->previews->count()}} Read</p>
          <a href="{{url('/submit')}}" class="font-weight-normal text-capitalize m-0">Submit Course Material</a><br>
          <a href="" class="font-weight-normal text-capitalize m-0">Share this course material with friends Icons</a><br>
          <a href="" class="btn btn-info">Download</a>
          <a href="" class="btn btn-info">Add this to your library</a>

        </div>
        <div class="col-lg-12">
          <!-- <div class="jumbotron shadow p-3 mb-2 bg-light rounded clearfix"> -->
            <embed src="{{asset('/material/'.$courseMaterial->file_path)}}" type="application/pdf" width="100%" height="1000px" />
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>  
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder">Similar Material</p>
      <div class="row">
        @foreach($similarCourseMaterials as $courseMaterial)
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-2">
              <a href="{{url('/preview/'.$courseMaterial->token)}}" class="special-link card-link card-font">{{$courseMaterial->name}}</a><br>
              <a href="{{url('/course/'.$courseMaterial->school->short_name.'/'.$courseMaterial->course->code)}}" class="card-link card-font text-uppercase">{{$courseMaterial->course->code}}</a><br>
              <p class="card-text card-font m-0 text-primary">{{$courseMaterial->file_type}}</p>
              <a href="#" class="card-link card-font">Download ({{$courseMaterial->file_size}})</a><br>
              <a href="{{url('/preview/'.$courseMaterial->token)}}" class="card-link card-font">Read Online</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> 
@endsection