@extends('admin.layouts.master')
@section('content')

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Kategori Paket Indihome</h5>
            <div class="card col-md-2">
              <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary">Tambah data</a>
            </div>
            @include('partial.alert')


            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
          
              <tbody>
                  @foreach ($data as $rows=> $row )
                  <tr>
                      <th scope="row">{{$data->firstItem() + $rows}}</th>
                      <td>{{$row->nama}}</td>
                      <td>
                      {{-- {{dd($row->id)}} --}}
                      <a href={{route("kategori.edit", $row->id)}} style="color: black;"><button type="button" class="btn btn-edit"><i class="bx bxs-edit"></i></button></a>
                      <form action="{{route('kategori.destroy' ,$row->id)}}" method="post">
                        @csrf
                        @method('DELETE')   
                        <button type="submit" onclick="swal_hapus()" class="btn btn-delete d-flex"><i class="bi bi-trash-fill"></i></button>
                      </form>    
                    </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
            
            
            <!-- End Default Table Example -->
            {{$data->links()}}
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    swal_hapus({
    title: "Apakah anda yakin ingin menghapus?",
    // text: "Sekali terhapus anda tidak!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Poof! Your imaginary file has been deleted!", {
        icon: "success",
      });
    } else {
      swal("Your imaginary file is safe!");
    }
  });
  </script>
@endsection