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
                <form method="post" action="{{ route('merk.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
              <label for="merk_code">Merk Code</label>
              <input type="text" name="merk_code" id="merk_code" class="form-control">
            </div>
            <div class="form-group">
              <label for="merk_name">Merk Name</label>
              <input type="text" name="merk_name" id="merk_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="merk_slug">Merk Slug</label>
              <input type="text" name="merk_slug" id="merk_slug" class="form-control">
            </div>
            <div class="form-group">
              <label for="merk_description">Merk Description</label>
              <textarea name="merk_description" id="merk_description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="merk_status">Merk Status</label>
              <input name="merk_status" id="merk_status" cols="30" rows="5" class="form-control"></input>
            </div>
            <div class="form-group">
                        <label for="merk_photo">File</label>
                        <input type="file" name="carfile" class="form-control" id="file" ariadescribedby="file" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('merk.index') }}" class="btn btn-sm btn-danger">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection