@section('title')
  Submit Course Material - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">Submit Course Material</p>
      <form>
        <div class="col-12">
          <div class="form-group row">
            <label for="course_id" class="col-sm-2 col-form-label font-weight-bolder">Course Code</label>
            <div class="col-sm-10">
            <select class="selectpicker form-control border border-1" id="course_id" data-live-search="true">
              <option data-tokens="china">China</option>
              <option data-tokens="malayasia">Malayasia</option>
              <option data-tokens="singapore">Singapore</option>
            </select>
            <div id="courseHelp" class="form-text text-muted">If the course is not listed <a href="">click here.</a></div>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label font-weight-bolder">Material Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" id="name" placeholder="Material Name" class="form-control">
              <div id="nameHelp" class="form-text text-muted">e.g Lecture note on electronics, past question, textbook on common law. </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label font-weight-bolder">Upload Material</label>
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="file" name="file_path" class="custom-file-input bg-info" id="customFile">
                <label class="custom-file-label" for="customFile">Choose material</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info btn-block">Upload Material</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div> 
@endsection