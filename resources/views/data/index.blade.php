@extends('layouts.templatecustomer')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
      <h2> CAR DATA</h2>
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
    <th>Name</th>
    <th>Description</th>
    <th>Amount</th>
    <th>Price</th>
  </tr>
  @if(!empty($paginate) && $paginate->count())
    @foreach($paginate as $crk)
      <tr>
      <td>{{ $crk->merk->name }}</td>
        <td>{{ $crk->name }}</td>
        <td>{{ $crk->desc }}</td>
        <td>{{ $crk->amount }}</td>
        <td>{{ $crk->price }}</td>
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