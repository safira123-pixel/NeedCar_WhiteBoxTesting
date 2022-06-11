@extends('layouts.templatecustomer')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/testi.css') }}">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<section class="testi py-5" id="page4">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h1 style="background-color: #D3D3D3;">TESTIMONIAL</h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <hr>
            </div>
          </div>
          <div class="container1">
          <div class="row">
            <div class="col ">
              <div class="card" style="width: 20rem;" >
                <center><img src="{{ asset('img/user2.png') }}" class="card-img-top" alt="..." style="width: 100px; height: 100px;"></center>
                <div class="card-body text-justify">
                  <p class="namecoment">neil patel</p>
                  <div class="stars1">
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                  </div>
                  <p class="coment"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 20rem;">
              <center><img src="{{ asset('img/user2.png') }}" class="card-img-top" alt="..." style="width: 100px; height: 100px;"></center>
                <div class="card-body text-justify">
                  <p class="namecoment">cellia rins</p>
                  <div class="stars2">
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p class="coment"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur aipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 20rem;">
                <center><img src="{{ asset('img/user2.png') }}" class="card-img-top" alt="..." style="width: 100px; height: 100px;"></center>
                <div class="card-body text-justify">
                  <p class="namecoment">mike demien</p>
                  <div class="stars3">
                    <i class="fa fa-star" style="color:orange"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p class="coment"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
          </div>
        </div>
          </div>
      </section>
      @endsection
