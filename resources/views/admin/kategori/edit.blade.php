@extends('admin.layouts.master')
@section('content')
<div class="pagetitle">
    <h1>Edit Kategori</h1> 
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{route('paket.index')}}>Kategori</a></li>
        {{-- <li class="breadcrumb-item"><a href={{route('post.index')}}>All data</a></li> --}}
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<form action={{route("kategori.update", $data->id)}} method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')  

    <div class="row-md-12">
        <div class="container">
            <div class="card-body col-md-6">
            </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label" >Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control pd-5" name="nama" value="{{$data->nama}}">
                    </div>
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection