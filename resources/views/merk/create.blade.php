@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Create Merk
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
<form method="post" action="{{ route('merk.store') }}" id="myForm">
@csrf
<div class="form-group">
<label for="merk_code">Code</label>
<input type="text" name="merk_code" class="form-control" id="merk_code" aria-describedby="merk_code" >
</div>
<div class="form-group">
<label for="merk_name">Name</label>
<input type="merk_name" name="merk_name" class="form-control" id="merk_name" ariadescribedby="merk_name" >
</div>
<div class="form-group">
<label for="merk_slug">Slug</label>
<input type="merk_slug" name="merk_slug" class="form-control" id="merk_slug" ariadescribedby="merk_slug" >
</div>
<div class="form-group">
<label for="merk_decription">Decription</label>
<input type="text" name="merk_decription" class="form-control" id="merk_decription" ariadescribedby="merk_decription" >
</div>
<div class="form-group">
<label for="merk_status">Status</label>
<input type="merk_status" name="merk_status" class="form-control" id="merk_status" ariadescribedby="merk_status" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection