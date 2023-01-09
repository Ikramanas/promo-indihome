@extends('admin.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>{{$title}}</h1> 
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{route('home.index')}}>Dashboard</a></li>
            {{-- <li class="breadcrumb-item"><a href={{route('post.index')}}>All data</a></li> --}}
            <li class="breadcrumb-item active">{{$title}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    {{-- {{dd($category)}}  --}}
    {{-- {{dd($category)}} --}}
  
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Data</h5>
                    <!-- General Form Elements -->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action={{route("paket.update", $data->id)}} method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="file" id="formFile" name="image" value="{{$data->image}}" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label" >Nama Paket</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label" >Kecepatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="kecepatan" value="{{$data->kecepatan}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-5">
                              <select id="category" class="form-select" aria-label="Default select example" name="kategori_id">
                                    <option >Open this select menu</option>
                                    {{-- {{dd($category)}} --}}
                                    @foreach ($category as $row)
                                    <option value="{{$row->id}}" selected > {{$row->nama}} </option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label" >Harga</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label" >Harga Pemasangan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga_pemasangan" value="{{$data->harga_pemasangan}}">
                            </div>
                        </div>
                        
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Label</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="label" id="label1" value="promo"  checked>
                                <label class="form-check-label" for="label1">
                                  Promo
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="label" id="label2" value="normal">
                                <label class="form-check-label" for="label2">
                                  Normal
                                </label>
                              </div>
                          </fieldset>

                          <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
              </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
      $('#category').change(function() { 
        var category = $(this).val(); 
        $.ajax({
          type: 'POST', 
          url: 'ajax_jurusan.php', 
          data: 'category_id=' + category, 
          success: function(response) { 
            $('#jurusan').html(response); 
          }
        });
      });
     
    </script>
@endsection