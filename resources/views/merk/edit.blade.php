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
<label for="code">Code</label>
<input type="text" name="code" class="form-control" id="code" aria-describedby="code" >
</div>
<div class="form-group">
<label for="name">Name</label>
<input type="name" name="name" class="form-control" id="name" ariadescribedby="name" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection