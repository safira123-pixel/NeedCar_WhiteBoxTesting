@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <!-- table car -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Car</h4>
          <div class="card-tools">
            <a href="{{ route('car.create') }}" class="btn btn-sm btn-primary">
              New
            </a>
          </div>
        </div>
        <!-- <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Search
                </button>
              </div>
            </div>
          </form>
        </div> -->
        <div class="card-body">
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
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Car Code</th>
                  <th>Car Name</th>
                  <th>Car Description</th>
                  <th>Car Photo</th>
                  <th>Car Amount</th>
                  <th>Car Price</th>
                  <th>Car Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($caritem as $car)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                    <img src="{{ asset('images/car1.jpg') }}" alt="car 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>
                  {{ $car->car_code }}
                  </td>
                  <td>
                  {{ $car->car_name }}
                  </td>
                  <td>
                  {{ $car->car_description }}
                  </td>
                  <td>
                  {{ $car->car_photo }}
                  </td>
                  <td>
                  {{ $car->car_amount }}
                  </td>
                  <td>
                  {{ number_format($car->car_price, 2) }}
                  </td>
                  <td>
                  {{ $car->car_status }}
                  </td>
                  <td>
                    <a href="{{ route('car.show', $car->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('car.edit', $car->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <form action="{{ route('car.destroy', $car->id) }}" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Deleted
                      </button>                    
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $caritem->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection