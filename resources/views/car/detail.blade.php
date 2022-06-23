@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail Car
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Merk: </b>{{$Car->merk->name}}</li>
<li class="list-group-item"><b>Code: </b>{{$Car->code}}</li>
<li class="list-group-item"><b>Name: </b>{{$Car->name}}</li>
<li class="list-group-item"><b>Description: </b>{{$Car->desc}}</li>
<li class="list-group-item"><b>Amount: </b>{{$Car->amount}}</li>
<li class="list-group-item"><b>Price: </b>{{$Car->price}}</li>
<li class="list-group-item"><b>Status: </b>{{$Car->status}}</li>
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('car.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection