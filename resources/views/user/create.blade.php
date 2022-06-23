@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Create User
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('user.store') }}" id="myForm">
@csrf
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" class="form-control" id="name" aria-describedby="name" >
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control" id="email" ariadescribedby="email" >
</div>
<div class="form-group">
<label for="phone">Phone</label>
<input type="phone" name="phone" class="form-control" id="phone" ariadescribedby="phone" >
</div>
<div class="form-group">
<label for="address">Address</label>
<input type="text" name="address" class="form-control" id="address" ariadescribedby="address" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection