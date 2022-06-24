@extends('layouts.dashboard')
@section('content')
<div class="row mt-4">
    <!-- profil pertama -->
 <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
      <div class="card-body box-profile">
          <div class="text-center">
            <img src="{{ asset('img/profile1.png') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center">Safira Istifarini</h3>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            Jalan Argopuro No 90 Lumajang, Jawa Timur
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            safiraistifarini@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            (WhatsApp)+6281370587320
          </p>
          <hr>
        </div>
      </div>
    </div>

    <!-- profil 2 -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
      <div class="card-body box-profile">
          <div class="text-center">
            <img src="{{ asset('img/profile 2.png') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center">Dherisma Hanindita Utami</h3>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            Jalan Tirtoutomo 58 A
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            dherisma@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            (WhatsApp)+6285236374351
          </p>
          <hr>
        </div>
      </div>
    </div>
</div>
@endsection