@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2> CAR DATA</h2>
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

<table class="table table-bordered">
  <tr>
    <th>Merk</th>
    <th>Code</th>
    <th>Name</th>
    <th>Description</th>
    <th>Amount</th>
    <th>Price</th>
    <th>Status</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $crk)
      <tr>
      <td>{{ $crk->merk->name }}</td>
      <td>{{ $crk->code }}</td>
        <td>{{ $crk->name }}</td>
        <td>{{ $crk->desc }}</td>
        <td>{{ $crk->amount }}</td>
        <td>{{ $crk->price }}</td>
        <td>{{ $crk->status }}</td>
        <td>
          <form action="{{ route('car.destroy',['car'=>$crk->id]) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('car.edit',$crk->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
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