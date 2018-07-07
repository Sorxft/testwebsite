{{--
  Template Name: second Template
--}}

@extends('layouts.app')

@section('content')
  {{--  Start of Navigation Bar  --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img class="img-responsive" src="@asset('images/brain.png')">
    BrainPower
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse navbar-right" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link home" href="https://ryanpatrickwong.com/"><h5>Home</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link features" href="#images"><h5>Images</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#contact"><h5>Contact Me</h5></a>
      </li>
    </ul>
  </div>
</nav>
  {{--  End of Navigation Bar  --}}
<a href="#" class="back-to-top2" style="background: none; margin: 0%; position: fixed; bottom: 20px; right: 0%; width: 70px; height: 70px; z-index: 100; color: #ffffff; background-color: #000000; font-size: 60px">
  <i class="fas fa-angle-double-up"></i>
</a>
  {{--  Start of Header  --}}
<div class="jumbotron-fluid" style="top-margin: 100px; padding: 0%">
  <div class="container-fluid" style="position: relative;">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row" style="padding: 0%">
      <img src="@asset('images/landscape.jpg')" style="width: 100%; padding: 0%;">
      <div class="text-center" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); font-family:'Courier New', Courier, monospace">
        <font color="#ffffff"><h1 class="display-4">Nature</h1></font>
      </div>
    </div>
  </div>
</div>
  {{--  End of Header  --}}
  {{--  Start of First Heading  --}}
<div style="width: 100%; background-color: #EDF4ED">
  <div class="container">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          <p class="text-center">First featurette heading</p>
        </h2>
        <p class="lead">
          Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis eusmod semper. Praesent commodo cursus magna, vel scelerisque nnusl consectetur. Fusce dapibus, tellus ac cursus commodo.
        </p>
        <a class="btn btn-outline-secondary btn-sm" href="#">View PDF</a>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto rounded" alt="500x500" style="width: 500px; height: 500px" src="@asset('images/mountains.jpg')">
      </div>
    </div>
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group" style="margin-bottom: 0%">
    &nbsp;
  </div>
</div>
  {{--  End of First Heading  --}}
  {{--  Start of Images  --}}
<div class="container" id="images">
  <div class="form-group">
    &nbsp;
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <h1 class="display-4">
        <p class="text-center">Images</p>
      </h1>
    </div>
  </div>
  <div class="form-group">
    &nbsp;
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="@asset('images/landscape.jpg')" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/mountains.jpg')" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/windmills.jpg')" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="@asset('images/beach.jpg')" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="form-group">
  &nbsp;
</div>
<div class="form-group">
  &nbsp;
</div>
<div class="form-group">
  &nbsp;
</div>
  {{--  Start of Contact Me  --}}
<div style="width: 100%; background-color: #000000">
  <div class="container" id="contact">
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row justify-content-center">
      <div class="col-4 border-bottom border-white">
        <h3 class="display-4">
          <font color="#6B685F"><p class="text-center">Contact Me</p></font>
        </h3>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="row">
      <div class="col-md-6">
        <font color="#887934"><h2>Heading</h2></font>
        <font color="#999994"><p>Whatever you want to write here. It better be informative, tell people how to contact you. Oh and dont be a creep. Noo one likes a creep, you could go to jail and you dont wanna go to jail, right? Yeah better stay away from jail.</p></font>
      </div>
      <div class="col-md-6">
        <font color="#887934"><h2>Heading</h2></font>
        <font color="#999994"><p>Whatever you want to write here. It better be informative, tell people how to contact you. Oh and dont be a creep. Noo one likes a creep, you could go to jail and you dont wanna go to jail, right? Yeah better stay away from jail.</p></font>
      </div>
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group">
      &nbsp;
    </div>
    <div class="form-group" style="margin-bottom: 0%">
      &nbsp;
    </div>
  </div>
</div>
@endsection