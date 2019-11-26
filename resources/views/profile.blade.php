@section('title')
  Profile - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <!-- For big screen device -->
  <div class="container d-none d-md-block d-lg-block d-xl-block">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <div class="row">
        <div class="col-12 text-center lead font-weight-bolder mb-3">ACCOUNT INFORMATION</div>
        <div class="col-lg-2 col-md-3 text-center">
          <img class="profile-image" src="{{asset('image/earth.PNG')}}" height="130px" width="130px">
        </div>
        <div class="col-lg-3 col-md-4">
          <p class="lead font-weight-bolder text-uppercase m-0">{{$user->name}}</p>
          <a href="{{url('/changepassword')}}" class="btn btn-info m-1">Change Password</a><br>
          <a href="" class="btn btn-info m-1">Change Picture</a><br>
          <a href="" class="btn btn-info m-1">Update Profile</a>
        </div>
        <div class="col-lg-7 col-md-5 ">
          <p class="font-weight-bolder text-capitalize m-0">{{$user->school->full_name}}</p>
          <p class="font-weight-bolder text-capitalize m-0">{{$user->department->full_name}}</p>
          <p class="font-weight-bolder m-0">{{$user->email}}</p>
          <p class="font-weight-bolder m-0">{{$user->username}}</p>
          <p class="font-weight-bolder text-capitalize m-0">{{$user->role->name}}</p>
        </div>
      </div>
    </div>
  </div>  

  <!-- //For small screen device -->
  <div class="container d-md-none d-lg-none d-xl-none">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <div class="row">
        <div class="col-12 text-center lead font-weight-bolder mb-3">ACCOUNT INFORMATION</div>
        <div class="col-lg-2 col-md-3 text-center">
          <img class="profile-image" src="{{asset('image/earth.PNG')}}" height="130px" width="130px">
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <p class="lead font-weight-bolder text-uppercase m-0">{{$user->name}}</p>
          <a href="{{url('/changepassword')}}" class="btn btn-info m-1">Change Password</a><br>
          <a href="" class="btn btn-info m-1">Change Picture</a><br>
          <a href="" class="btn btn-info m-1">Update Profile</a>
        </div>
        <div class="col-lg-7 col-md-5 text-center">
          <p class="font-weight-bolder text-capitalize m-0">{{$user->school->full_name}}</p>
          <p class="font-weight-bolder text-capitalize m-0">{{$user->department->full_name}}</p>
          <p class="font-weight-bolder m-0">{{$user->email}}</p>
          <p class="font-weight-bolder m-0">{{$user->username}}</p>
          <p class="font-weight-bolder text-capitalize m-0">{{$user->role->name}}</p>
        </div>
      </div>
    </div>
  </div>  
@endsection