@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2> </h2>
    </div>

    <div class="float-right my-2">
      <a class="btn btn-info" href="{{ route('transaction.index') }}"> Home</a>
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
  <th>Car</th>
<th>Customer</th>
<th>Rent Date</th>
<th>Return Date</th>
<th>Price</th>
<th>Amount</th>
<th>Penalty</th>
<th>Status</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $trans)
      <tr>
      <td>{{ $trans ->car->name }}</td>
<td>{{ $trans ->user->name }}</td>
<td>{{ $trans ->rent_date }}</td>
<td>{{ $trans ->return_date }}</td>
<td>{{ $trans ->price }}</td>
<td>{{ $trans ->amount }}</td>
<td>{{ $trans ->penalty }}</td>
<td>{{ $trans ->return_date }}</td>
<td>{{ $trans ->status }}</td>
        <td>
          <form action="{{ route('transaction.destroy',['transaction'=>$trans->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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