@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">EDIT TRANSACTION</div>
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
            <form method="post" action="{{ route('transaction.update', $transaction->id_transaction) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="rent_date">Rent Date</label>
                    <input type="text" name="rent_date" class="form-control" id="rent_date" value="{{ $transaction->rent_date }}" aria-describedby="rent_date" >
                </div>
                <div class="form-group">
                    <label for="back_date">Back Date</label>
                    <input type="text" name="back_date" class="form-control" id="back_date" value="{{ $transaction->back_date}}" aria-describedby="back_date" >
                </div>
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    <input type="text" name="return_date" class="form-control" id="return_date" value="{{ $transaction->return_date }}" aria-describedby="return_date" >
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="price" name="price" class="form-control" id="price" value="{{ $transaction->price }}" aria-describedby="price" >
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="amount" name="amount" class="form-control" id="amount" value="{{ $transaction->amount }}" aria-describedby="amount" >
                </div>
                <div class="form-group">
                    <label for="penalty">Penalty</label>
                    <input type="penalty" name="penalty" class="form-control" id="penalty" value="{{ $transaction->penalty }}" aria-describedby="penalty" >
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="{{ $transaction->status }}" aria-describedby="status" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('transaction.index') }}" class="btn btn-sm btn-danger">Close</a>
          </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection