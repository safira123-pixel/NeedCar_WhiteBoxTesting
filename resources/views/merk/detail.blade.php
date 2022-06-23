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
<li class="list-group-item"><b>Code: </b>{{$Merk->code}}</li>
<li class="list-group-item"><b>Name: </b>{{$Merk->name}}</li>
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('merk.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection