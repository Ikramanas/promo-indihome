@extends('layouts.main')
@section('content')

{{-- <section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Selamat datang di IndiHome Makassar</h1>
        <h1> {{$data->nama}}</h1>
        <h2>Silahkan isi data diri anda untuk berlangganan {{$data->nama}}</h2>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-indihome.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section> --}}
<!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-md-12">
          <div class="col-md-6">

            <h1> {{$data->nama}}</h1>
            <h2>Silahkan isi data diri anda untuk berlangganan {{$data->nama}}</h2>

          </div>
        </div>

        {{-- <div class="col-md-12"> --}}

        <form action="{{route('home.store')}}" method="post" class="php-email-form">
          
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <div class="mt-5">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="hidden" name="id" class="form-control" value="{{$data->id}}" required>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="no_telepon" placeholder="Nomor telepon" required>
                </div>

                <div class="col-md-12">
                  <label class="col-md-4" for="foto_ktp">foto ktp</label>
                  <input type="file" class="form-control col-md-8 d-flex" name="foto_ktp" placeholder="Foto KTP" required>
                </div>
                
                <div class="col-md-12">
                  <label class="col-md-4" for="foto_ktp">Foto diri memegang KTP</label>
                  <input type="file" class="form-control col-md-8 d-flex" name="foto_ktp" placeholder="Foto diri memegang KTP" required>
                </div>

              </div>

            </div>

            <div class="col-md-12">
      
              <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
              </div>

              <div class="form-group">
                  <label for="exampleFormControlInput1">Latitude, Longitude</label>
                  <input type="text" class="form-control" id="latlong" name="latlong">
              </div>

              <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Tempat</label>
                  <input type="text" class="form-control" name="nama_tempat">
              </div>   

              <div class="form-group">
                  <label for="exampleFormControlInput1">Kategori Tempat</label>
                  <select class="form-control" name="kategori" id="">
                      <option value="">--Kategori Tempat--</option>
                      <option value="rumah makan">Rumah Makan</option>
                      <option value="pom bensin">Pom Bensin</option>
                      <option value="Fasilitas Umum">Fasilitas Umum</option>
                      <option value="Pasar/Mall">Pasar/Mall</option>
                      <option value="rumah sakit">Rumah Sakit</option>
                      <option value="Sekolah">Sekolah</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="exampleFormControlInput1">Keterangan</label>
                  <textarea class="form-control" name="keterangan" cols="30" rows="5"></textarea>
              </div>

            </div>

          </div>

          <div class="col-md-12 mt-5 text-center">
            <button type="submit" class="button-snd" >Kirim Pesanan</button>
          </div>

        </form>

        <div class="col-8"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
            <!-- peta akan ditampilkan dengan id = mapid -->
            <div id="mapid"></div>
        </div>

      </div>

    </div>



    <div class="row"> <!-- class row digunakan sebelum membuat column  -->
      <div class="col-4"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
          <div class="jumbotron"> <!-- untuk membuat semacam container berwarna abu -->
          <h1>Add Location</h1>
          <hr>
              <form action="proses.php" method="post">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Latitude, Longitude</label>
                      <input type="text" class="form-control" id="latlong" name="latlong">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Tempat</label>
                      <input type="text" class="form-control" name="nama_tempat">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Kategori Tempat</label>
                      <select class="form-control" name="kategori" id="">
                          <option value="">--Kategori Tempat--</option>
                          <option value="rumah makan">Rumah Makan</option>
                          <option value="pom bensin">Pom Bensin</option>
                          <option value="Fasilitas Umum">Fasilitas Umum</option>
                          <option value="Pasar/Mall">Pasar/Mall</option>
                          <option value="rumah sakit">Rumah Sakit</option>
                          <option value="Sekolah">Sekolah</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Keterangan</label>
                      <textarea class="form-control" name="keterangan" cols="30" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-info">Add</button>
                  </div>
              </form>
          </div>
      </div>
      <div class="col-8"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
          <!-- peta akan ditampilkan dengan id = mapid -->
          <div id="mapid"></div>
      </div>
  </div>

  </section>

</main>



<script>
  // set lokasi latitude dan longitude, lokasinya kota palembang 
  var mymap = L.map('mapid').setView([-2.9547949, 104.6929233], 13);   
  //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
  L.tileLayer(
      'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 20,
          id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
          tileSize: 512,
          zoomOffset: -1,
          accessToken: 'your.mapbox.access.token'
      }).addTo(mymap);
      
</script>
@endsection