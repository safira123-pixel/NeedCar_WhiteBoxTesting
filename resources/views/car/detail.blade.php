@extends('layouts.dashboard.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Car Detail
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Name: </b>{{$Car->name}}</li>
            <li class="list-group-item"><b>Merk: </b>{{$Car->Merk->name_merk}}</li>
                <li class="list-group-item"><b>Liscense_number: </b>{{$Car->liscense_number}}</li>
                <li class="list-group-item"><b>Year: </b>{{$Car->year}}</li>
                <li class="list-group-item"><b>Status: </b>{{$Car->status}}</li>
                <li class="list-group-item"><b>Price: </b>{{$Car->price}}</li>
                <li class="list-group-item"><b>Profile: </b>
                <img style="width: 100%" src="{{ asset('./storage/'. $Car->photo_car) }}" alt=""></li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('Car.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection