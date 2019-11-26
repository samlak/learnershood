@section('title')
  Change Password - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">Change Password</p>
      <form>
        <div class="col-12">
          <div class="form-group row">
            <label for="current_password" class="col-sm-2 col-form-label font-weight-bolder">Current Password</label>
            <div class="col-sm-10">
              <input type="password" name="current_password" id="current_password" placeholder="Current Password" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label font-weight-bolder">New Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" id="password" placeholder="New Password" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="password-confirm" class="col-sm-2 col-form-label font-weight-bolder">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirm Password" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info btn-block">Change Password</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div> 
@endsection