@extends('layouts.templatecustomer')

@section('content')
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">-- List Of Car Merk --</h2>
    </div>

    <div class="col-md-3">
      <div class="card mb-3 shadow-sm">
          <img src="{{asset('images/LogoSuzuki.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>SUZUKI</b>
            </p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3 shadow-sm">
          <img src="{{asset('images/LogoToyota.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>TOYOTA</b>
            </p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3 shadow-sm">
          <img src="{{asset('images/LogoHonda.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>HONDA</b>
            </p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3 shadow-sm">
          <img src="{{asset('images/LogoMitsubishi.png') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>MITSUBISHI</b>
            </p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card mb-3 shadow-sm">
          <img src="{{asset('images/LogoBMW.jpg') }}" alt="foto produk" class="card-img-top">
        <div class="card-body">
            <p class="card-text">
              <b>BMW</b>
            </p>
        </div>
      </div>
    </div>

</div>
@endsection