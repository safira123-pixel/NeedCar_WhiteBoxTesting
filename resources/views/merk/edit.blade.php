@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Mahasiswa
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
            <form method="post" action="{{ route('merk.update', $merk->merk_code) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="merk_code">code</label>
                    <input type="text" name="merk_code" class="form-control" id="merk_code" value="{{ $merk->merk_code }}" aria-describedby="merk_code" >
                </div>
                <div class="form-group">
                    <label for="merk_name">name</label>
                    <input type="text" name="merk_name" class="form-control" id="merk_name" value="{{ $merk->nama }}" aria-describedby="merk_name" >
                </div>
                <div class="form-group">
                    <label for="merk_slug">merk slug</label>
                    <input type="merk_slug" name="merk_slug" class="form-control" id="merk_slug" value="{{ $merk->merk_slug }}" aria-describedby="merk_slug" >
                </div>
                <div class="form-group">
                    <label for="merk_description">description</label>
                    <input type="merk_description" name="merk_description" class="form-control" id="merk_description" value="{{ $merk->merk_description }}" aria-describedby="merk_description" >
                </div>
                <div class="form-group">
                    <label for="merk_status">status</label>
                    <input type="merk_status" name="merk_status" class="form-control" id="merk_status" value="{{ $merk->merk_status }}" aria-describedby="merk_status" >
                </div>
                <div class="form-group">
                    <label for="File">File</label>
                    <input type="file" name="carfile" class="form-control" value="{{ $merk->photo_car }}" id="File" ariadescribedby="File" >
                    <img style="width: 100%" src="{{ asset('./storage/'. $merk->photo_car) }}" alt="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('merk.index') }}" class="btn btn-sm btn-danger">Close</a>
          </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection