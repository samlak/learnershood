@section('title')
  Add School - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">Add School</p>
      <form action="" method="POST">
        <div class="col-12">
          <div class="form-group row">
            <label for="full_name" class="col-sm-2 col-form-label font-weight-bolder">Full Name</label>
            <div class="col-sm-10">
              <input type="text" name="full_name" id="full_name" placeholder="Full Name" class="form-control">
              <div id="fullNameHelp" class="form-text text-muted">e.g Federal University of Technology Akure</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="short_name" class="col-sm-2 col-form-label font-weight-bolder">Abbreviation</label>
            <div class="col-sm-10">
              <input type="text" name="short_name" id="short_name" placeholder="Short Name" class="form-control">
              <div id="shortNameHelp" class="form-text text-muted">e.g FUTA, UI, UNILAG, ABU</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label font-weight-bolder">Upload Logo <span class="text-muted">(Optional)</span> </label>
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="file" name="logo" class="custom-file-input bg-info" id="customFile">
                <label class="custom-file-label" for="customFile">Choose Logo</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info btn-block">Add School</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div> 
@endsection