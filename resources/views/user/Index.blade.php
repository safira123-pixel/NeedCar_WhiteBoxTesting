@extends('layouts.dashboard')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>User Data</h2>
</div>
<div class="float-right my-2">
<!-- <a class="btn btn-success" href="admin/DataCustomer/create"> Input User</a> -->
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
@foreach ($user as $usr)
<tr>
<td>{{ $usr ->name }}</td>
<td>{{ $usr ->email }}</td>
<td>{{ $usr ->phone }}</td>
<td>{{ $usr ->address }}</td>
<td>
<!-- <a class="btn btn-info" href="/admin/DataCustomer/{id_user}/show">Show</a> -->
<a class="btn btn-primary" href="/admin/DataCustomer/{id_user}/edit">Edit</a>
<br>
<form href="/admin/DataCustomer/{id_user}/destroy" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection