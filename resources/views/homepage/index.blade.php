@extends('layouts.templatehomepage')
@section('content')

<div class="container">
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->

  <!-- Prodduk car -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">-- List Of Car Units --</h2>
    </div>
    <!-- produk pertama --> 
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="{{asset('images/Honda.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>HONDA N7X</b>
            </p>
          <div class="row mt-4">
            <div class="col">
            <button class="btn btn-light" href="#">
                <h9> Coming Soon </h9>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 900.000,00 / day
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="{{asset('images/HondaBr-v.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>HONDA BR-V</b>
            </p>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light" href="#">
                <h9> Coming Soon </h9>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 800.000,00 / day
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="{{asset('images/AvanzaToyota.jpeg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>AZANSA TOYOTA</b>
            </p>
          <div class="row mt-4">
            <div class="col">
            <button class="btn btn-light" href="#">
                <h9> Coming Soon </h9>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 750.000,00 / day
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="btn btn-primary plus float-right" href="{{ URL::to('login') }}" target="harus_login"><h7> And Many More </h7></a>
    </div>
  </div>
  <!-- end produk -->
</div>
@endsection