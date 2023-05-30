@extends('layouts.app')

@section('content')
    <!-- slider -->
    <div class="container-fluid" style="background-image:url(images/parallax2.jpg); width : 100%;">
        <!-- slider -->
        <container class="slider bg-dark"  >
            <div id="carouselExampleCaptions" class="carousel slide bg-dark">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('images/parallax2.jpg') }}" class="d-block w-100" alt="parallax sewa mobil" />
                  <div class="carousel-caption d-none d-md-block">
                    <h1>Rental Mobil</h1>
                    <p>
                      Some representative placeholder content for the first slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/slider3.jpg') }}" class="d-block w-100" alt="slider sewa mobil terbaik" />
                  <div class="carousel-caption d-none d-md-block">
                    <h2>Sewa Mobil Terbaik</h2>
                    <p>
                      Some representative placeholder content for the second slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/slider22.jpg') }}" class="d-block w-100" alt="sewa mobil lengkap" />
                  <div class="carousel-caption d-none d-md-block">
                    <h2>Tersedia Berbagai Macam Kendaraan</h2>
                    <p>
                      Some representative placeholder content for the third slide.
                    </p>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
              >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
              >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </container>
           <!-- akhir slider-->
           
         <!-- Chat -->
         <button class="btn btn-primary fixed-bottom  m-3 rounded-3 " style="width: 50px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="{{ asset('images/chat.png') }}" style="width: 25px;" alt=""></button>
    
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Live Chat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="pertanyaan"> <p>Selamat pagi, saya ingin tanya? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit similique, quisquam nisi sapiente maxime hic explicabo, odit cupiditate saepe ipsum tempore quis beatae nesciunt commodi. Aliquam sunt tempore pariatur delectus?</p> </div>
          <div class="jawaban"><p>Iya, silahkan. loremlorem</p></div>
        </div>
        <div class="container text-center mb-4">
          <div class="row">
            <div class="col-8">
              <input type="text" class="border rounded-2 shadow-sm border border-dark p-1" placeholder="Masukkan pesan">
            </div>
            <div class="col-4">
              <img src="{{ asset('images/pesan.png') }}" style ="width :20px;" alt="chat rental mobil cv.adinalta" >
            </div>
          </div>
        </div>
      </div>   
          
       </div>
    
        <div class="container-fluid d-flex justify-content-evenly mt-2 d-grid gap-2 mx-auto " >
            <!-- dropdown tipe mobil -->
          <div class="dropdown ">
            <button
              class="btn btn-primary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              style="width: 100%;"
            >
              Tipe Mobil
            </button>
    
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Avanza</a></li>
              <li><a class="dropdown-item" href="#">Expander</a></li>
              <li><a class="dropdown-item" href="#">Toyota Rush</a></li>
              <li><a class="dropdown-item" href="#">Grand Innova</a></li>
              <li><a class="dropdown-item" href="#">Innova Riborn</a></li>
              <li><a class="dropdown-item" href="#">Venturer</a></li>
              <li><a class="dropdown-item" href="#">Fortuner</a></li>
              <li><a class="dropdown-item" href="#">Pajero</a></li>
              <li><a class="dropdown-item" href="#">Alphard</a></li>
              <li><a class="dropdown-item" href="#">Vellfire</a></li>
              <li><a class="dropdown-item" href="#">Hiace</a></li>
              <li><a class="dropdown-item" href="#">Bus Pariwisata</a></li>
            </ul>
          </div>
          <!-- akhir dropdown -->
          <!-- datepicker -->
          <div  class="rounded">
            <input class="rounded border border-1 p-2 shadow-sm" type="datetime-local" />
          </div>
          <!-- akhir datepicker -->
       </div>
       
       <!-- brand -->
        <div class="row justify-content-center m-5 d-flex">
          <div class="col-4">
            <img class="img-fluid" src="images/logo-toyota.png" alt="brand toyota" style="width:80%">
          </div>
          <div class="col-4">
            <img class="img-fluid" src="images/logo-mitsubishi.png" alt="brand mitsubishi">
          </div>
        </div>
    
    
        
        <!-- keunggulan -->
        <div class="container text-center">
          <h2 class="mb-4">Keunggulan</h2>
          <div class="row">
            <div class="col-sm p-3">
              <img class="img-fluid" src="images/sewa-mobil-berpengalaman.png" alt="sewa mobil supir berpengalaman">
              <p class="fs-4">Sopir Berpengalaman</p>
            </div>
            <div class="col-sm p-3">
              <img class="img-fluid" src="images/sewa-mobil-terbaik.png" alt="sewa mobil terbaik">
              <p class="fs-4">Pelayanan Berkualitas</p>
            </div>
            <div class="col-sm p-3">
              <img class="img-fluid" src="images/sewa mobil murah.png" alt="sewa mobil murah">
              <p class="fs-4">Harga Kompetitif</p>
            </div>
          </div>
        </div>
        
         <!-- Produk -->
         <container class="produk">
          <h2 class="mb-3">Produk</h2>
          @foreach ($products->chunk(3) as $chunk)
          <div class="produk mt-2">
            <div class="card-group justify-content-center">
              @foreach ($chunk as $product)
              <div class="col-12 col-md-4 px-2 mt-2">
              <div class="card">
                <img 
                  src="{{ asset('images/'.$product->icon) }}"
                  class="card-img-top mx-5 "
                  alt=" rental mobil {{ $product->slug }}"
                />
                <div class="card-body">
                  <div class="container text-center">
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="p-1"><span> tersedia</span></div>
                      </div>
                      <div class="col-6">
                        <div class="p-0"><h3>{{ $product->title }}</h3></div>
                      </div>
                      <div class="col-6">
                        <div class="p-3">
                          <img src="images/rating.png" alt="rating" />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-0"><h5>Rp.{{ $product->price }}K/hari</h5></div>
                      </div>
                    </div>
                  </div>
                  <div class="buttonProduk">
                    <button><a href="{{route('checkout.create', $product->id)}}">Rental Sekarang</a></button>
                  </div>
                  <div class="buttonDetail">
                    <a href="/detailmobil">Detail</a>
                  </div>
                </div>
              </div>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
        </container>
          <!-- gelombang -->
          <container class="gelombang">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#ae88ff"
                fill-opacity="1"
                d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
              ></path>
            </svg>
          </container>
          <div class="bgColor" style="background:#ae88ff; "hhhhhhh>
            <div class="testimoni" >
              <h2>Testimoni</h2>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/testimoni_pelanggan sewa mobil.png" class="d-block w-100" alt="testimoni rental mobil makassar">
                  </div>
                  <div class="carousel-item">
                    <img src="images/testimoni_pelanggan sewa mobil.png" class="d-block w-100" alt="testimoni rental mobil makassar">
                  </div>
                  <div class="carousel-item">
                    <img src="images/testimoni_pelanggan sewa mobil.png" class="d-block w-100" alt="testimoni rental mobil makassar">
                  </div>
                </div>
              </div>
            </div>
            <div class="client d-flex align-content-center flex-wrap flex-column">
              <h2>Client Kami</h2>
              <div class="card-group">
                <div class="card p-0 mx-2">
                  <img src="images/client_wisata.jpeg" class="card-img-top" alt="pelanggan sewa mobil" style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Client</h5>
                    <p class="card-text">Orang Biasa </p>
                  </div>
                </div>
                <div class="card p-0 mx-2">
                  <img src="images/client_tumming.jpeg" class="card-img-top p-0" alt="pelanggan sewa mobil" style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Tumming Abu</h5>
                    <p class="card-text">Komedian dan Kreator Konten</p>
                  </div>
                </div>
                <div class="card p-0 mx-2">
                  <img src="images/client-arman.jpeg" class="card-img-top p-0" alt="pelanggan sewa mobil" style="width:100%;">
                  <div class="card-body  text-center">
                    <h5 class="card-title">Armand Maulana</h5>
                    <p class="card-text">Musisi</p>
                  </div>
                </div>
              </div>
            
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#ffffff"
                fill-opacity="1"
                d="M0,96L48,106.7C96,117,192,139,288,144C384,149,480,139,576,122.7C672,107,768,85,864,90.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
              ></path>
            </svg>
          </div>
    
          <!-- Tentang Kami -->
          
          <div class="container text-center">
            <h2>Tentang Kami</h2>
            <div class="row">
              <div class="col-sm-8">
                <div class="kerjasama shadow-sm border border-1 p-4 m-2 rounded">
                  <h3>Ingin Melakukan Kerjasama dengan Kami?</h3>
                  <p>Hubungi Kami</p>
                  <a href="#"><img style="width: 50px" src="images/informasi kerja sama rental mobil.png" alt="informasi kerja sama rental mobil" style="background:none;"></a>
            
                </div>
              </div>
              <div class="col-sm-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.7417039680902!2d119.4589988!3d-5.1864209!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3da37f54031%3A0x9de53a808befd3e4!2sBTN%20Minasa%20upa%20Blok%20M%206%20no%207!5e0!3m2!1sid!2sid!4v1683994249983!5m2!1sid!2sid" style="border:0; width : 98%; height : 250px; margin: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <!-- Artikel -->
          <div class="container text-center">
            <h2 class="artikel" > Artikel</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col mb-4 mt-4 shadow-sm border border-1 px-0 pt-0 pb-3 rounded m-0 d-flex justify-content-center">
                <div class="cardArtikel" style="width: 18rem">
                    <img style="height: 240px"
                      src="images/99 kubah.jpg"
                      class="card-img-top"
                      alt="destinasi wisata makassar"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Masjid 99 Kubah</h5>
                      <p class="card-text">Makassar</p>
                      <a href="/masjid-99-kubah" class="btn btn-dark">Lihat Selengkapnya</a>
                    </div>
                  </div>
              </div>
              <div class="col mb-4 mt-4 shadow-sm border border-1 px-0 pt-0 pb-3 rounded m-0 d-flex justify-content-center">
                <div class="cardArtikel" style="width: 18rem">
                  <img style="height: 240px"
                    src="images/bira.png"
                    class="card-img-top"
                    alt="destinasi wisata makassar"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Tanjung Bira</h5>
                    <p class="card-text">Bulukumba</p>
                    <a href="/pantai-bira" class="btn btn-dark">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4 mt-4 shadow-sm border border-1 px-0 pt-0 pb-3 rounded m-0 d-flex justify-content-center">
                <div class="cardArtikel" style="width: 18rem">
                  <img style="height: 240px"
                    src="images/bantimurung.jpeg"
                    class="card-img-top"
                    alt="destinasi wisata makassar"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Bantimurung</h5>
                    <p class="card-text">Maros</p>
                    <a href="/bantimurung" class="btn btn-dark">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4 mt-4 shadow-sm border border-1 px-0 pt-0 pb-3 rounded m-0 d-flex justify-content-center">
                <div class="cardArtikel" style="width: 18rem">
                  <img style="height: 240px"
                    src="images/apparalarang.png"
                    class="card-img-top"
                    alt="destinasi wisata makassar"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Tebing Appalarang</h5>
                    <p class="card-text">Bulukumba</p>
                    <a href="/appalarang" class="btn btn-dark">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>  
    
           <!-- footer -->
        <section class="footer justify-content-evenly">
          <footer>
            <div class="row">
              <div class="col" id="colFooter">
                <div class="wrapper-col-1">
                  <h1>Cv.Adinalta</h1>
                  <p>Rental mobil Makassar berkulitas, terjangkau dan Aman</p>
                  <div class="wrapper-icon d-flex">
                    <a href="#"><img src="images/facebook-cv.adinalta.png" alt="facebook cv.adinalta"></a>
                    <a href="#"><img src="images/instagram-cv.adinalta.png" alt="instagram cv.adinalta"></a>
                    <a href="#"><img src="images/twitter-cv.adinalta.png" alt="twitter cv.adinalta"></a>                
                  </div>
              </div>
            </div>
              <div class="col" id="colFooter">
                <div class="wrapper-col-2">
                  <h1>Usefull Link</h1>
                  <P>Tentang Kami</P>
                  <p>Produk Kami</p>
                  <p>Layanan</p>
                  <p>Kebijakan Privasi</p>
                </div>
              </div>
              <div class="col" id="colFooter">
                <div class="wrapper-col-3">
                  <h1>Artikel</h1>
                  <p><a href="/tips-berkendara">10 Tips Aman Berkendera</a></p>
                  <p>Cara Merawat Mobil Agar Terlihat Baru</p>
                  <p>Mulai Berbisnis Rental Mobil</p>
                  <p>Cara Menghilangkan Bau Pada Mobil</p>
                </div>
              </div>
              <div class="col" id="colFooter">
                <div class="wrapper-col-3">
                  <h1>Contact Us</h1>
                  <p>info@teamapp.com</p><a href="/rawat-mobil">Cara Merawat Mobil Agar Terlihat Baru</a>
                  <p><a href="/rawat-mobil">Cara Merawat Mobil Agar Terlihat Baru</a></p>
                  <p>0821 2389 2913</p>
                  <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                </div>
              </div>
            </div>
            <div class="copyright">© Copyright CV. ADINALTA All Right Reserved</div>
          </footer>
        </section>
@endsection