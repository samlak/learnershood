@section('title')
  Contact Us - Learnershood
@endsection 
@extends('layouts.template')   
@section('content')

  <div class="body-space-3"></div>

  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 pt-5 px-5">
        <h2 class="text-center font-weight-bolder">Contact Detail</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
            <div class="text-center clearfix">
              <span class="text-info" style="font-size: 100px;">
                <i class="fa fa-home"></i>
              </span>
              <h3>Office Address</h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
            <div class="text-center clearfix">
              <span class="text-info" style="font-size: 100px;">
                <i class="fa fa-phone"></i>
              </span>
              <h3>Telephone</h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
            <div class="text-center clearfix">
              <span class="text-info" style="font-size: 100px;">
                <i class="fa fa-envelope"></i>
              </span>
              <h3>Email Address</h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 bg-white p-5">
        <h2 class="text-center font-weight-bolder">Drop Feedback</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <form class="">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Full Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="subject" placeholder="Subject">
            </div>
          </div>
          <div class="form-group row">
            <label for="message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="message" rows="3" placeholder="Please leave your message here"></textarea>
            </div>
          </div>
          <div class="form-group row text-center">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-info">Send Message</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>


@endsection