@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
User Edit
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
<form method="post" action="{{ route('user.update', $Customer->id) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
                    <label for="user">Name</label>
                    <select name="user" class="form-control" id="user">
                        @foreach ($user as $usr)
                        <option value="{{ $usr->id }}" {{ ($customer->user_id == $usr->id) ? 'selected' : '' }}>{{ $usr->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user">Email</label>
                    <select name="user" class="form-control" id="user">
                        @foreach ($user as $usr)
                        <option value="{{ $usr->id }}" {{ ($customer->user_id == $usr->id) ? 'selected' : '' }}>{{ $usr->email }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user">Phone</label>
                    <select name="user" class="form-control" id="user">
                        @foreach ($user as $usr)
                        <option value="{{ $usr->id }}" {{ ($customer->user_id == $usr->id) ? 'selected' : '' }}>{{ $usr->phone }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user">Address</label>
                    <select name="user" class="form-control" id="user">
                        @foreach ($user as $usr)
                        <option value="{{ $usr->id }}" {{ ($customer->user_id == $usr->id) ? 'selected' : '' }}>{{ $usr->address }}</option>
                        @endforeach
                    </select>
                </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection