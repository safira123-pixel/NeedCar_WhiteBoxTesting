@extends('layouts.dashboard.dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2>CAR DATA</h2>
    </div>
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ route('car.create') }}"> Input Car</a>
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

<form class="form" method="get" action="/search">
  <div class="form-group w-100 mb-3">
      <label for="search" class="d-block mr-2">Searching</label>
      <input type="text" name="search" class="form-control w-75 d-inline" value="{{ old('search') }}" id="search" placeholder="Masukkan keyword">
      <button type="submit" class="btn btn-primary mb-1">Search</button>
  </div>
</form>

<table class="table table-bordered">
  <tr>
    <th>Name</th>
    <th>Liscense Number</th>
    <th>Merk</th>
    <th>Year</th>
    <th>Status</th>
    <th>Profile</th>
    <th>Price</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $car)
      <tr>
        <td>{{ $car->name }}</td>
        <td>{{ $car->liscense_number }}</td>
        <td>{{ $car->merk->name_merk }}</td>
        <td>{{ $car->year }}</td>
        <td><img style="width: 80px; height: 80px; overflow: hidden" class="rounded-circle" src="{{ 
          asset('./storage/'. $car->photo_car) }}" alt=""></td>
        <td>{{ $car->status }}</td>
        <td>{{ $car->price }}</td>
        <td>
          <form action="{{ route('car.destroy',['car'=>$car->name]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('car.show',$car->name) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('car.edit',$car->name) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a class="btn btn-warning btn-sm" href="/car/nilai/{{ $car->name }}">Nilai</a>
          </form>
        </td>
      </tr>
    @endforeach
  @else
    <tr>
      <td colspan="10">There are no data.</td>
    </tr>
  @endif
</table>

{!! $paginate->links() !!}

@endsection