@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>User Data</h2>
</div>
<div class="float-right my-2">
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
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th width="280px">Action</th>
</tr>
@foreach ($customer as $cust)
<tr>
<td>{{ $cust ->user->name }}</td>
<td>{{ $cust ->user->email }}</td>
<td>{{ $cust ->user->phone }}</td>
<td>{{ $cust ->user->address }}</td>
<td>
</td>
</tr>
@endforeach
</table>
@endsection