@extends('layouts.dashboard.dashboard')
@section('title','Tambah Data')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
            <form action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="photo_car" id="fileinput" class="form-control border-dark-50" required="" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Merk</label>
                            <select name="merk_id" class="form-control select2">
                                @foreach (App\Models\Merk::orderBy('name','asc')->get() as $row)
                                <option value="{{$row->id}}">{{title_case($row->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Liscence Number</label>
                          <input type="text" name="license_number" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Year</label>
                          <input type="text" name="year" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Rent per day</label>
                          <input type="text" name="price" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Colour</label>
                          <input type="text" name="color" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary  shadow-sm">Save</button>
                            <a class="btn btn-light shadow-sm" href="{{route('car.index')}}">Delete</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    $('.select2').select2({
            dropdownParent: $('body'),
            theme: 'bootstrap'
    });

    $('#fileinput').fileinput({
        uploadUrl:'#',
          browseClass: "btn btn-primary btn-block",
          fileActionSettings:{
            showZoom:false,
            showUpload:false,
            removeClass: "btn btn-danger",
            removeIcon: "<i class='fa fa-trash'></i>"
          },
          showCaption: false,
          showRemove: false,
          showUpload: false,
          showCancel: false,
          dropZoneEnabled: false,
          allowedFileExtensions: ['jpg', 'png','jpeg'],
    });
</script>

@endpush