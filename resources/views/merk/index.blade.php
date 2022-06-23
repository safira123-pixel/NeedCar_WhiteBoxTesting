@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>Merk Data</h2>
</div>
<div class="float-right my-2">
<a class="btn btn-success" href="{{ route('merk.create') }}"> Input Merk</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Code</th>
<th>Name</th>
<th>Slug</th>
<th>Description</th>
<th>Status</th>
<!-- <th>Photo</th> -->
<th width="280px">Action</th>
</tr>
@foreach ($merk as $mrk)
<tr>
<td>{{ $mrk ->merk_code }}</td>
<td>{{ $mrk ->merk_name }}</td>
<td>{{ $mrk ->merk_slug }}</td>
<td>{{ $mrk ->merk_description }}</td>
<td>{{ $mrk ->merk_status }}</td>
<!-- <td><img style="width: 80px; height: 80px; overflow: hidden" class="rounded-circle" src="{{ asset('.storage/app/public/'. $mrk->merk_photo) }}" alt=""></td> -->
<td>
<form action="{{ route('merk.destroy',['merk'=>$mrk->id]) }}" method="POST">
<a class="btn btn-info" href="{{ route('merk.show',$mrk->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('merk.edit',$mrk->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection