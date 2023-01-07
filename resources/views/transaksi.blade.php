@extends('layouts.main')
@section('content')
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1> Berlangganan {{$data->nama}}</h1>
            <h2>Silahkan isi data diri anda</h2>

            <div class="mt-5">
                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4">
      
                      <div class="col-md-6">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                      </div>
      
                      <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>

                      <div class="col-md-12">
                        <input type="text" class="form-control" name="no_telepon" placeholder="Nomor telepon" required>
                      </div>

                      <div class="col-md-12">
                        <textarea class="form-control" name="alamat" rows="6" placeholder="alamat" required></textarea>
                      </div>

                      <div class="col-md-12">
                        <input type="file" class="form-control" name="foto_ktp" placeholder="Foto KTP" required>
                      </div>

                      <div class="col-md-12 text-center">
                        {{-- <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                        <button type="submit">Send Message</button>
                      </div>
      
                    </div>
                  </form>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection