@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail User
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Name: </b>{{$Customer->user->name}}</li>
<li class="list-group-item"><b>Email: </b>{{$Customer->user->email}}</li>
<li class="list-group-item"><b>Phone: </b>{{$Customer->user->phone}}</li>
<li class="list-group-item"><b>Address: </b>{{$Customer->user->address}}</li>
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('user.index') }}">Back</a>
</div>
</div>
</div>
@endsection