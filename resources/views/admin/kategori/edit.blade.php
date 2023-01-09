@extends('admin.layouts.master')
@section('content')
<form action={{route("paket.update", $data->nama)}} method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

      <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label" >Nama Kategori</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
          </div>
      </div>

@endsection