@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Car Edit
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
<form method="post" action="{{ route('car.update', $car->id) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
                    <label for="merk">Choose Merk</label>
                    <select name="merk" class="form-control" id="merk">
                        @foreach ($merk as $mrk)
                        <option value="{{ $mrk->id }}" {{ ($car->merk_id == $mrk->id) ? 'selected' : '' }}>{{ $mrk->name }}</option>
                        @endforeach
                    </select>
                </div>
<div class="form-group">
<label for="code">Code</label>
<input type="text" name="code" class="form-control" id="code" aria-describedby="code" >
</div>
<div class="form-group">
<label for="name">Name</label>
<input type="name" name="name" class="form-control" id="name" ariadescribedby="name" >
</div>
<div class="form-group">
<label for="desc">Description</label>
<input type="desc" name="desc" class="form-control" id="desc" ariadescribedby="desc" >
</div>
<div class="form-group">
<label for="amount">amount</label>
<input type="amount" name="amount" class="form-control" id="amount" ariadescribedby="amount" >
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="price" name="price" class="form-control" id="price" ariadescribedby="price" >
</div>
<div class="form-group">
<label for="status">Status</label>
<input type="status" name="status" class="form-control" id="status" ariadescribedby="status" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection