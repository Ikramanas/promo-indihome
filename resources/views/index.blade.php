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

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Pilihan Paket IndiHome</p>
          
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua Paket</li>
              <li data-filter=".filter-app">Paket 2P</li>
              <li data-filter=".filter-web">Paket 3P</li>
              <li data-filter=".filter-card">Paket Gamer</li>
              <li data-filter=".filter-pelajar">Paket Pelajar</li>
              <li data-filter=".filter-promo1">Promo Internet Telpon</li>
              <li data-filter=".filter-promo2">Promo Internet + Telepon + TV</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <!-- paket 2P -->
          <div class="col-12 portfolio-item filter-app">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + TV</h3>
                      
                      <img src="assets/img/20mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>345.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="{{route('home.edit',1)}}" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',11)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + TV</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>420.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 5 - 7 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',13)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + TV</h3>
                      
                      <img src="assets/img/40mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>495.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 7 - 10 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',14)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + TV</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>560.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 10 - 12 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',15)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + TV</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>915.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',35)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
                  
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon</h3>
                      
                      <img src="assets/img/20mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>315.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',36)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>390.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',37)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon</h3>
                      
                      <img src="assets/img/40mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>465.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',38)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>530.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',39)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>885.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',40)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                </div>
        
              </div>
        
            </section>
          </div>
          
          <!-- paket 3P -->
          <div class="col-12 portfolio-item filter-web">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Reguler IndiHome 3P Internet + Phone + TV</h3>
                      
                      <img src="assets/img/20mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>375.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',17)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Reguler IndiHome 3P Internet + Phone + TV</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>450.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 5 - 7 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',18)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <!-- <span class="featured">Promo</span> -->
        
                      <h3>Reguler Indihome 3P Internet + Phone + TV</h3>
                      
                      <img src="assets/img/40mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>525.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 7 - 10 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',19)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Reguler IndiHome 3P Internet + Phone + TV</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>590.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 10 - 12 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',20)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Reguler IndiHome 3P Internet + Phone + TV</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>945.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 12 - 18 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',21)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                </div>
        
              </div>
        
            </section>
          </div>
          <!-- paket gamer -->
          <div class="col-12 portfolio-item filter-card">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket Gamers</h3>
                      
                      <img src="assets/img/20mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>315.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',22)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket Gamers</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>600.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',23)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket Gamers</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>955.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',24)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                </div>
        
              </div>
        
            </section>
          </div>
          <!-- paket pelajar -->
          <div class="col-12 portfolio-item filter-pelajar">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket Pelajar</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>275.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',25)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                </div>
        
              </div>
        
            </section>
          </div>

          <!-- paket promo 1 -->
          <div class="col-12 portfolio-item filter-promo1">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>335.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',26)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>475.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',27)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 2P Internet + Telepon (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>795.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',28)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                </div>
        
              </div>
        
            </section>
          </div>

          <!-- paket promo 2 -->
          <div class="col-12 portfolio-item filter-promo2">
            <section id="pricing" class="pricing">

              <div class="container" data-aos="fade-up">
        
                <div class="row gy-4" data-aos="fade-left">
        
                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 3P (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/30mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>385.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',32)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 3P (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/50mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>615.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',33)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                      <span class="featured">Promo</span>
        
                      <h3>Paket 3P (Dengan Akses Disney+ Hotstar)</h3>
                      
                      <img src="assets/img/100mbps.PNG" class="img-fluid " style="margin-top: -15px;">
                      <div class="price"><sup>Rp.</sup>965.000<span>/bln</span></div>
                      <!-- <p>Cocok digunakan untuk 3 - 5 perangkat sekaligus</p> -->
                      <ul>
                        <li>*Biaya pemasangan Rp. 500.000 <i>(dibayar setelah pemasangan)</i></li>
                        <li>*PPN 10%</li>
                      </ul>
                      {{-- <a href="https://api.whatsapp.com/send?phone=6282290129248&text=Form Pemasangan Indihome%0ANama%20Lengkap%20%3A%0AAlamat%20Lengkap%20Pemasangan%20%3A%0ANo%20HP%20%3A%0AEmail%20%3A%0APaket%20Yang%20Dipilih%20%3A%0A*Foto%20KTP*%0A*Foto%20dgn%20KTP*%0A*Share%20Lokasi%20Via%20WA*" class="btn-buy mt-1">Berlangganan</a> --}}
                      <form action="{{route('home.edit',34)}}">
                        @csrf
                        @method('POST')
                        <input type="submit"  class="btn-buy mt-1" value="Berlangganan">
                      </form>
                    </div>
                  </div>

                </div>
        
              </div>
        
            </section>
          </div>

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