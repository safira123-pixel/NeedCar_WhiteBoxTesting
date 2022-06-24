<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Report as PDF</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-
    Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-
    J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-
  Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-
  wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style>
    table tr td,
    table tr th{
      font-size: 9pt;
    }
  </style>
</head>
  <body>
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="text-center mt-2">
        <h5>SALES REPORT</h5>
        <br>
        <h5 class="text-center">REPORT RENTAL CAR</h5>
      </div>
    </div>
  </div>

  <div class="container">
    <h1> TOTAL </h1>
    <p><b>car Amount : </b> {{ $transaksi->car->id->count() }}</p>
    <p><b>Customer Amount : </b> {{ $transaksi->user->id->count() }}</p>
    <p><b>Transaction Amount : </b> {{ $transaksi->id->count() }}</p>
    <br>
    <h1> TRANSACTION </h1>
    <table class="table table-bordered">
      <tr>
        <th>Car Name</th>
        <th>Customer</th>
        <th>Rent Date</th>
        <th>Back Date</th>
        <th>Return Date</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Penalty</th>
      </tr>
      @if(!empty($transaksi) && $transaksi->count())
        @foreach($transaksi as $tran)
          <tr>
            <td>{{ $tran->car->name }}</td>
            <td>{{ $tran->user->name }}</td>
            <td>{{ $tran->rent_date }}</td>
            <td>{{ $tran->back_date }}</td>
            <td>{{ $tran->return_date }}</td>
            <td>{{ $tran->price }}</td>
            <td>{{ $tran->amount }}</td>
            <td>{{ $tran->penalty }}</td>

            <td>
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td class="text-center" colspan="10">There are no data.</td>
        </tr>
      @endif
    </table>
  </div>
</body>
</html>