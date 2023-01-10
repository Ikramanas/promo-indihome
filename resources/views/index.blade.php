@extends('layouts.main')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat datang di IndiHome Makassar</h1>
          <!-- <h1 data-aos="fade-up">Lengkapi kebutuhan layanan internet, TV dan telepon di rumah dengan paket 3P</h1> -->
          <h2 data-aos="fade-up" data-aos-delay="400">Solusi Internet Berkelas dan Cerdas Untuk Aktivitas Tanpa Batas. Bebas akses internet stabil, telepon rumah jernih dan tayangan TV interaktif terpopuler dengan IndiHome.</h2>
          <!-- <h4>Bebas akses internet stabil, telepon rumah jernih dan tayangan TV interaktif terpopuler dengan IndiHome.</h4> -->
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a target="_blank" href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Pesan Sekarang</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-indihome.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h4 style="line-height: 35px;">Rasakan serunya bisa akses social media dengan jaringan internet cepat yang berkualitas dan nikmat bebas ngobrol ke sanak saudara melalui telepon rumah dengan Indihome 2P (Internet + Phone) penawaran khusus.</h4>
            <!-- <p>
              Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
            </p> -->
            <div class="text-center text-lg-start mt-4">
              <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Pesan Sekarang</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/indihome-2p-paket.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container aos-init aos-animate" data-aos="fade-up">

      <header class="section-header">
        <p>Pilihan Paket IndiHome</p>
        
      </header>

      {{-- PERCOBAAN TAB DINAMIS --}}
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class=" col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua Paket</li>
            
            @foreach ($kategori as $row)
            <li data-filter=".filter-{{$row->id}}">{{$row->nama}}</li>
            @endforeach
            
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($kategori as $row)
        <div class="col-12 portfolio-item filter-{{$row->id}}">
          <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">
      
              <div class="row gy-4" data-aos="fade-left">
                
                @foreach ($paket_data->where('kategori_id',"$row->id") as $paket)
                <div class="col-lg-4 col-md-6 " data-aos="zoom-in" data-aos-delay="100">
                  
                  <div class="box">
                    
                    @if($paket->label == 'promo')
                    <span class="featured">Promo</span>
                    @endif
                    
                    <h3>{{$paket->nama}}</h3>
                    
                    <img src='{{asset("admin/assets/img/$paket->image")}}' class="img-fluid " style="margin-top: -15px;">
                    {{-- {{dd($paket)}} --}}
                    <div class="price"><sup>Rp.</sup> @currency($paket->harga)<span>/bln</span></div>

                    <ul>
                      <li>*Biaya pemasangan Rp @currency($paket->harga_pemasangan) <i>(dibayar setelah pemasangan)</i></li>
                      <li>*PPN {{$paket->ppn}}%</li>
                    </ul>
                    <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a>

                  </div>

                </div>
                @endforeach

              </div>
      
            </div>
    
          </section>
        </div>
        @endforeach

      </div>

    </div>

  </section>

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <!-- <h2>Langkah Pemasangan</h2> -->
        <p>Langkah Langkah Pemasangan Indihome</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pilih paket sesuai kebutuhan</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Konsultasikan paket dengan kami</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Mengisi form pendaftaran</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pengecekan lokasi</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pemasangan</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pembayaran deposit</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

    
    </div>

  </section><!-- End Features Section -->

  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <!-- <h2>Contact</h2> -->
        <p>Hubungi Kami</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-12">

          <div class="row gy-4">
            <div class="col-md-3">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. STO Raya I Tamalanrea<br>Makassar, Sulawesi Selatan</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Telepon / WA</h3>
                <p>+62 822-9012-9248</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>reskyantiwidia1@gmail.com</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Jam Operasional</h3>
                <p>Setiap Hari<br>08:00 - 17:00 WITA</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection