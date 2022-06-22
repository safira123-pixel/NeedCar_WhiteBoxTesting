@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Car</h3>
          <div class="card-tools">
            <a href="{{ route('car.index') }}" class="btn btn-sm btn-danger">
              Close
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('car.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="merk_id">Merk Car</label>
              <select name="merk_id" id="merk_id" class="form-control">
                <option value="">Choose Merk</option>
                @foreach($merkitem as $merk)
                <option value="{{ $merk->id }}">{{ $merk->merk_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="car_code">Car Code</label>
              <input type="text" name="car_code" id="car_code" class="form-control">
            </div>
            <div class="form-group">
              <label for="car_name">Name Car</label>
              <input type="text" name="car_name" id="car_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="car_slug">Car Slug</label>
              <input type="text" name="car_slug" id="car_slug" class="form-control">
            </div>
            <div class="form-group">
              <label for="car_description">Car Description</label>
              <textarea name="car_description" id="car_description" cols="30" rows="5" class="form-control"></textarea>
            </div>
                <div class="form-group">
                  <label for="car_amount">amount</label>
                  <input type="text" name="car_amount" id="car_amount" class="form-control">
                </div>
            <div class="form-group">
              <label for="car_price">Car Price</label>
              <input type="text" name="car_price" id="car_price" class="form-control">
            </div>
            <div class="form-group">
              <label for="car_photo">File</label>
              <input type="file" name="car_photo" class="form-control" id="file" ariadescribedby="file" >
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection