@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail Merk
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Code: </b>{{$Merk->merk_code}}</li>
<li class="list-group-item"><b>Name: </b>{{$Merk->merk_name}}</li>
<li class="list-group-item"><b>Slug: </b>{{$Merk->merk_slug}}</li>
<li class="list-group-item"><b>Description: </b>{{$Merk->merk_description}}</li>
<li class="list-group-item"><b>Status: </b>{{$Merk->merk_status}}</li>
<!-- <li class="list-group-item"><b>Photo: </b><img style="width: 100%" src="{{ asset('./storage/'. $Merk->merk_photo) }}" alt=""></li> -->
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('merk.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection