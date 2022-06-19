@extends('layouts.dashboard.dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2>NEED-A-CAR</h2>
    </div>
    <form class="form float-left" method="get" action="/search">
      <div class="form-group">
          {{-- <label for="search" class="d-block mr-2">Search</label> --}}
          <input type="text" name="search" class="form-control w-75 d-inline" value="{{ old('search') }}" id="search" placeholder="Masukkan keyword">
          <button type="submit" class="btn btn-primary mb-1">Cari</button>
      </div>
    </form>
    <div class="float-right my-2">
      <a class="btn btn-info" href="{{ route('car.index') }}"> Home</a>
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

<table class="table table-bordered">
  <tr>
    <th>Name</th>
    <th>Liscense Number</th>
    <th>Year</th>
    <th>Merk</th>
    <th>Status</th>
    <th>Price</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $car)
      <tr>
        <td>{{ $car->name }}</td>
        <td>{{ $car->liscense_number }}</td>
        <td>{{ $car->year }}</td>
        <td>{{ $car->merk->name_merk }}</td>
        <td>{{ $car->status }}</td>
        <td>{{ $car->price }}</td>
        <td>
          <form action="{{ route('car.destroy',['car'=>$car->name]) }}" method="POST">
            <a class="btn btn-info btn-sm" href="{{ route('car.show',$car->name) }}">Show</a>
            <a class="btn btn-primary btn-sm" href="{{ route('car.edit',$car->name) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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