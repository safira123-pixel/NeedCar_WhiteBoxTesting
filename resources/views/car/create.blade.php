@extends('layouts.dashboard.dashboard')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Data Mobil 
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
                <form method="post" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" id="name" aria-describedby="name" >
                    </div>
                    <div class="form-group">
                        <label for="liscense_number">Liscense Number</label>
                        <input type="liscense_number" name="liscense_number" class="form-control" id="liscense_number" ariadescribedby="liscense_number" >
                    </div>
                    <div class="form-group">
                        <label for="Merk">Merk</label>
                        <select name= "Merk" class="form-control" id="Merk">
                            @foreach($Merk as $mrk)
                                <option value ="{{$mrk->id}}"> {{$mrk->name_merk}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="year" name="year" class="form-control" id="year" ariadescribedby="year" >
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="status" name="status" class="form-control" id="status" ariadescribedby="status" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" name="price" class="form-control" id="price" ariadescribedby="price" >
                    </div>                    
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" name="carfile" class="form-control" id="file" ariadescribedby="file" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection