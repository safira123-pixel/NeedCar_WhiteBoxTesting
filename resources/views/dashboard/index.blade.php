@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-secondary">
        <div class="inner">
          <h3>150</h3>

          <p>available car</p>
        </div>
        <a href="#" class="small-box-footer">More info</a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>Customer</p>
        </div>
        <a href="#" class="small-box-footer">More info</a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>150</h3>

          <p>Transaction</p>
        </div>
        <a href="#" class="small-box-footer">More info</a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>150</h3>

          <p>Active Transaction</p>
        </div>
        <a href="#" class="small-box-footer">More info</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sales Transaction</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Code</th>
                <th>Tenant Name</th>
                <th>Rent Car</th>
                <th>Rent (Per Day)</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>001</td>
                <td>Alvin</td>
                <td>Avanza</td>
                <td>1</td>
                <td>850.000.00</td>
              </tr>
              <tr>
                <td>2</td>
                <td>002</td>
                <td>Farah</td>
                <td>Panther</td>
                <td>1</td>
                <td>700.000,00</td>
              </tr>
              <tr>
                <td>3</td>
                <td>003</td>
                <td>Junia</td>
                <td>Honda VXY</td>
                <td>2</td>
                <td>1.000.000,00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection