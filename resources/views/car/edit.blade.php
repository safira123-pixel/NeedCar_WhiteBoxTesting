@extends('layouts.dashboard.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Car
        </div>
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
            <form method="post" action="{{ route('car.update', $car->name) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $car->name }}" aria-describedby="name" >
                </div>
                <div class="form-group">
                    <label for="merk">Choose Merk</label>
                    <select name="merk" class="form-control" id="merk">
                        @foreach ($merk as $item)
                        <option value="{{ $item->id }}" {{ ($car->merk_id == $item->id) ? 'selected' : '' }}>{{ $item->name_merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="liscense_number">Liscense Number</label>
                    <input type="liscense_number" name="liscense_number" class="form-control" id="liscense_number" value="{{ $car->liscense_number }}" aria-describedby="liscense_number" >
                </div>
                <div class="form-group">
                    <label for="year">year</label>
                    <input type="year" name="year" class="form-control" id="year" value="{{ $car->year }}" aria-describedby="year" >
                </div>
                <div class="form-group">
                    <label for="status">status</label>
                    <input type="status" name="status" class="form-control" id="status" value="{{ $car->status }}" aria-describedby="status" >
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="price" name="price" class="form-control" id="price" value="{{ $car->price }}" aria-describedby="price" >
                </div>
                <div class="form-group">
                    <label for="File">File</label>
                    <input type="file" name="carfile" class="form-control" value="{{ $car->photo_car }}" id="File" ariadescribedby="File" >
                    <img style="width: 100%" src="{{ asset('./storage/'. $car->photo_car) }}" alt="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection