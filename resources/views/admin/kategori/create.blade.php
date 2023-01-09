@extends('admin.layouts.master')
@section('content')
<h3>Tambah Kategori</h3>
<form action={{route("paket.update", $data->nama)}} method="POST" enctype="multipart/form-data">
    @csrf

      <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label" >Nama Kategori</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="nama">
          </div>
      </div>

@endsection