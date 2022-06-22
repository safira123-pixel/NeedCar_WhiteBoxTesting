@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">USER EDIT</div>
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
            <form method="post" action="{{ route('user.update', $user->name) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" >
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->nama }}" aria-describedby="email" >
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="phone" name="phone" class="form-control" id="phone" value="{{ $user->phone }}" aria-describedby="phone" >
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="address" name="address" class="form-control" id="address" value="{{ $user->address }}" aria-describedby="address" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection