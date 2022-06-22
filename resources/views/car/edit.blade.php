@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit</h3>
          <div class="card-tools">
            <a href="{{ route('car.index') }}" class="btn btn-sm btn-danger">
              Tutup
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
          <form action="{{ route('car.update', $caritem->id) }}" method="post">
            {{ method_field('patch') }}
            @csrf
            <div class="form-group">
              <label for="car_id">car</label>
              <select name="car_id" id="car_id" class="form-control">
                <option value="">Choose car</option>
                @foreach($caritem as $car)
                <option value="{{ $car->id }}" {{ $caritem->car_id == $car->id ? 'selected' : ''}}>{{ $car->name_car }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="car_code">Code</label>
              <input type="text" name="car_code" id="car_code" value={{ $caritem->car_code }} class="form-control">
            </div>
            <div class="form-group">
              <label for="car_name">Name</label>
              <input type="text" name="car_name" id="car_name" value={{ $caritem->car_name }} class="form-control">
            </div>
            <div class="form-group">
              <label for="car_slug">Slug car</label>
              <input type="text" name="car_slug" id="car_slug" value={{ $caritem->car_slug }} class="form-control">
            </div>
            <div class="form-group">
              <label for="car_description">Description</label>
              <textarea name="car_description" id="car_description" cols="30" rows="5" class="form-control">{{ $caritem->car_description }}</textarea>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="car_amount">car amount</label>
                  <input type="text" name="car_amount" id="car_amount" value={{ $caritem->car_amount }} class="form-control">
                </div>
              </div>
            <div class="form-group">
              <label for="car_price">car price</label>
              <input type="text" name="car_price" id="car_price" value={{ $caritem->car_price }} class="form-control">
            </div>
            <div class="form-group">
              <label for="car_status">car status</label>
              <select name="car_status" id="car_status" class="form-control">
                <option value="publish" {{ $caritem->car_status == 'publish'? 'selected': ''}}>Publish</option>
                <option value="unpublish" {{ $caritem->car_status == 'unpublish'? 'selected': ''}}>Unpublish</option>
              </select>
            </div>
            div class="form-group">
                    <label for="car_photo">File</label>
                    <input type="file" name="car_photo" class="form-control" value="{{ $car->car_photo }}" id="File" ariadescribedby="File" >
                    <img style="width: 100%" src="{{ asset('./images'. $car->car_photo) }}" alt="">
                </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection