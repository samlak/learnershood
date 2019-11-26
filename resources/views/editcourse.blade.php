@section('title')
  Add Course - Learnershood
@endsection 
@extends('layouts.template')   
@section('content') 
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">Add Course</p>
      <form>
        <div class="col-12">
          <div class="form-group row">
            <label for="school_id" class="col-sm-2 col-form-label font-weight-bolder">School</label>
            <div class="col-sm-10">
            <select class="selectpicker form-control border border-1" id="school_id" data-live-search="true">
              <option selected>Not Listed</option>
              <option data-tokens="china">China</option>
              <option data-tokens="malayasia">Malayasia</option>
              <option data-tokens="singapore">Singapore</option>
            </select>
            <div id="schoolHelp" class="form-text text-muted">If the school is not listed, choose "Not Listed" and fill the form below.</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="full_name" class="col-sm-2 col-form-label font-weight-bolder">School Full Name</label>
            <div class="col-sm-10">
              <input type="text" name="full_name" id="full_name" placeholder="School Full Name" class="form-control">
              <div id="fullNameHelp" class="form-text text-muted">e.g Federal University of Technology Akure</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="short_name" class="col-sm-2 col-form-label font-weight-bolder">School Abbreviation</label>
            <div class="col-sm-10">
              <input type="text" name="short_name" id="short_name" placeholder="School Short Name" class="form-control">
              <div id="shortNameHelp" class="form-text text-muted">e.g FUTA, UI, UNILAG, ABU</div>
            </div>
          </div>

          <div class="form-group row">
            <label for="department_id" class="col-sm-2 col-form-label font-weight-bolder">Department</label>
            <div class="col-sm-10">
            <select class="selectpicker form-control border border-1" id="department_id" data-live-search="true">
              <option selected>Not Listed</option>
              <option data-tokens="china">China</option>
              <option data-tokens="malayasia">Malayasia</option>
              <option data-tokens="singapore">Singapore</option>
            </select>
            <div id="departmentHelp" class="form-text text-muted">If the department is not listed, choose "Not Listed" and fill the form below.</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="full_name" class="col-sm-2 col-form-label font-weight-bolder">Department Full Name</label>
            <div class="col-sm-10">
              <input type="text" name="full_name" id="full_name" placeholder="Department Full Name" class="form-control">
              <div id="fullNameHelp" class="form-text text-muted">e.g Electrical and Electronic Engineering</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="short_name" class="col-sm-2 col-form-label font-weight-bolder">Department Abbreviation</label>
            <div class="col-sm-10">
              <input type="text" name="short_name" id="short_name" placeholder="Department Short Name" class="form-control">
              <div id="shortNameHelp" class="form-text text-muted">e.g EEE, CVE, PHY, CSC, ESM</div>
            </div>
          </div>

          <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label font-weight-bolder">Course Code</label>
            <div class="col-sm-10">
              <input type="number" name="code" id="code" placeholder="Course Code" class="form-control">
              <div id="codeHelp" class="form-text text-muted">e.g PHY210 as 210</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label font-weight-bolder">Course Title</label>
            <div class="col-sm-10">
              <input type="text" name="title" id="title" placeholder="Course Title" class="form-control">
              <div id="titleHelp" class="form-text text-muted">e.g Basic Electronics</div>
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label font-weight-bolder">Course Description</label>
            <div class="col-sm-10">
              <textarea name="description" id="description" placeholder="Course Description" class="form-control"></textarea>
              <div id="descriptionHelp" class="form-text text-muted">
                The content you provide will help our algorithim in generating the right content for the course.  Please make sure to include the right keyword
                related to the course. Giving a detail description will help others as well.
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info btn-block">Add Department</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div> 
@endsection