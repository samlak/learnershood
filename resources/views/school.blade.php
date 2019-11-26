@section('title')
  {{$school->full_name}} ({{$school->short_name}}) - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <div class="row">
        <div class="col-lg-2 col-md-3">
          @if(!$school->logo)
            <img class="ml-4" src="{{asset('image/image.png')}}" height="130px" width="130px">
          @else
          @foreach($school->images as $logo)
            <img class="ml-4" src="{{asset('image/'.$logo->file_path)}}" height="130px" width="130px">
          @endforeach
          @endif
        </div>
        <div class="col-lg-10 col-md-9">
          <p class="lead font-weight-bolder text-uppercase m-0">{{$school->full_name}} ({{$school->short_name}})</p>
          <p class="font-weight-normal m-0">{{$school->courseMaterials->count()}} Material(s)</p>
          <a href="{{url('/editschool/'.$school->short_name)}}" class="font-weight-normal text-capitalize m-0">Edit School Info</a>
        </div>
        <div class="col-12">
          <p class="my-2 lead font-weight-bolder text-capitalize my-2">Departments Available</p>
        </div>
      </div>
      <div class="row">
        @foreach($school->departments as $department)
          <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card">
              <div class="card-body p-2">
                <a href="{{url('/department/'.$department->school->short_name.'/'.$department->short_name)}}" class="special-link card-link card-font">{{$department->full_name}} ({{$department->short_name}})</a><br>
                <a href="{{url('/department/'.$department->school->short_name.'/'.$department->short_name)}}" class="card-link card-font">{{$department->courseMaterials->count()}} material(s)</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>  
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder">Similar Schools</p>
      <div class="row">
        @foreach($similarSchools as $school)
          <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card">
              <div class="card-body p-2">
                <a href="{{url('/school/'.$school->short_name)}}" class="special-link card-link card-font">{{$school->full_name}} ({{$school->short_name}})</a><br>
                <a href="{{url('/school/'.$school->short_name)}}" class="card-link card-font">{{$school->courseMaterials->count()}} material(s)</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div> 
@endsection