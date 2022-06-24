@extends('layouts.dashboard')

@section('content')
<div class="container">    
            <br />
            <h1 class="text-center text-primary">Transaction Table</h1>
            <br />
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
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
                    </thead>
                    <tbody>
                        @foreach($data as $trans)
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
          <form action="{{ route('car.destroy',['car'=>$crk->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection