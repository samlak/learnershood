@section('title')
  {{$department->full_name}} ({{$department->short_name}}) - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <div class="row">
        <div class="col-lg-2 col-md-3">
          <img class="ml-4" src="{{asset('image/image.png')}}" height="130px" width="130px">
        </div>
        <div class="col-lg-10 col-md-9">
          <p class="lead font-weight-bolder text-uppercase m-0">{{$department->full_name}} ({{$department->short_name}})</p>
          <a href="{{url('/school/'.$department->school->short_name)}}" class="font-weight-bold text-capitalize m-0">{{$department->school->full_name}}</a>
          <p class="font-weight-normal m-0">{{$department->courseMaterials->count()}} Material(s)</p>
          <a href="{{url('/editdepartment/'.$department->school->short_name.'/'.$department->short_name)}}" class="font-weight-normal text-capitalize m-0">Edit Department Info</a>
        </div>
        <div class="col-12">
          <p class="my-2 lead font-weight-bolder text-capitalize my-2">Courses Available</p>
        </div>
      </div>
      <div class="row">
        @foreach($department->courses as $course)
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-2">
              <a href="{{url('/course/'.$course->school->short_name.'/'.$course->code)}}" class="special-link card-link card-font">{{$course->title}} ({{$course->code}})</a><br>
              <a href="{{url('/school/'.$course->school->short_name)}}" class="card-link card-font text-uppercase">{{$course->school->short_name}}</a><br>
              <a href="{{url('/course/'.$course->school->short_name.'/'.$course->code)}}" class="card-link card-font">{{$course->courseMaterials->count()}} material(s)</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="btn btn-info float-right" href="#" role="button">Pagination</a>
    </div>
  </div>  
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder">Similar Department</p>
      <div class="row">
        @foreach($similarDepartments as $department)
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body p-2">
                <a href="{{url('/department/'.$department->school->short_name.'/'.$department->short_name)}}" class="special-link card-link card-font">{{$department->full_name}}</a><br>
                <a href="{{url('/school/'.$department->school->short_name)}}" class="card-link card-font text-uppercase">{{$department->school->short_name}}</a><br>
                <a href="{{url('/department/'.$department->school->short_name.'/'.$department->short_name)}}" class="card-link card-font">{{$department->courseMaterials->count()}} material(s)</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> 
@endsection