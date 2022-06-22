@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2>transaction Data</h2>
    </div>
    <div class="float-right my-2">
      <a class="btn btn-info" href="{{ route('transaction.index') }}"> Home</a>
      <a class="btn btn-success" href="{{ route('transaction.create') }}"> Input</a>
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
    <th>Rent Date</th>
    <th>Back Date</th>
    <th>Return Date</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Penalty</th>   
    <th>Status</th>
    <th width="280px">Action</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $transactions)
      <tr>
        <td>{{ $transactions->rent_date }}</td>
        <td>{{ $transactions->back_date }}</td>
        <td>{{ $transactions->return_date }}</td>
        <td>{{ $transactions->price }}</td>
        <td>{{ $transactions->amount }}</td>
        <td>{{ $transactions->penalty }}</td>
        <td>{{ $transactions->status }}</td>
          <form action="{{ route('transaction.destroy',['transaction'=>$transactions->id_transaction]) }}" method="POST">
            <a class="btn btn-primary btn-sm" href="{{ route('transaction.edit',$transactions->id_transaction) }}">Edit</a>
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