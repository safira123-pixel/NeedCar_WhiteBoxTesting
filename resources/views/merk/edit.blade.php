@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Merk Edit
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
<form method="post" action="{{ route('merk.update', $Merk->id) }}" id="myForm">
@csrf
@method('PUT')
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
<label for="merk_description">Description</label>
<input type="merk_description" name="merk_description" class="form-control" id="merk_description" ariadescribedby="merk_description" >
</div>
<div class="form-group">
<label for="merk_status">Status</label>
<input type="merk_status" name="merk_status" class="form-control" id="merk_status" ariadescribedby="merk_status" >
</div>
<!-- <div class="form-group">
<label for="File">Photo</label>
<input type="file" name="merkfile" class="form-control" value="{{ $Merk->merk_photo }}" id="File" ariadescribedby="File" >
<img style="width: 100%" src="{{ asset('./storage/public/'. $Merk->merk_photo) }}" alt="">
</div> -->
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection