@section('title')
  All Schools - Learnershood
@endsection 
@extends('layouts.template')   
@section('content')
  <div class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded clearfix">
      <p class="lead font-weight-bolder text-center">All Schools Available</p>
      <div class="text-center mb-3">
        <a href="?name=a">A</a>
        <a href="?name=b">B</a>
        <a href="?name=c">C</a>
        <a href="?name=d">D</a>
        <a href="?name=e">E</a>
        <a href="?name=f">F</a>
        <a href="?name=g">G</a>
        <a href="?name=h">H</a>
        <a href="?name=i">I</a>
        <a href="?name=j">J</a>
        <a href="?name=k">K</a>
        <a href="?name=l">L</a>
        <a href="?name=m">M</a>
        <a href="?name=n">N</a>
        <a href="?name=o">O</a>
        <a href="?name=p">P</a>
        <a href="?name=q">Q</a>
        <a href="?name=r">R</a>
        <a href="?name=s">S</a>
        <a href="?name=t">T</a>
        <a href="?name=u">U</a>
        <a href="?name=v">V</a>
        <a href="?name=w">W</a>
        <a href="?name=x">X</a>
        <a href="?name=y">Y</a>
        <a href="?name=z">Z</a>
      </div>
      <div class="row">
        @foreach($schools as $school)
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
      @if(!\Request::has('name'))
        <div class="float-right">
          {!! $schools->render() !!}
        </div>
      @endif
    </div>
  </div> 
@endsection