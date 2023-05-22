@extends('layouts.app')

@section('content')
    <!-- slider -->
                <container class="slider">
                    <div id="carouselExampleCaptions" class="carousel slide">
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
                            <img src="{{ asset('images/parallax2.jpg') }}" class="d-block w-100" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                            <h1>Rental Mobil</h1>
                            <p>
                                Some representative placeholder content for the first slide.
                            </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider3.jpg" class="d-block w-100" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                            <h2>Sewa Mobil Berkualitas</h2>
                            <p>
                                Some representative placeholder content for the second slide.
                            </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider22.jpg" class="d-block w-100" alt="..." />
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
                    <div class="fitur_chat">
                    <div class="icon_chat">
                    <div class="btn btn-primary position-fixed" style="border-radius: 30px; padding : 10px;"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="images/chat.png" alt=""></div>
                    </div>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Live Chat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="pertanyaan"> <p>Selamat pagi, saya ingin tanya? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit similique, quisquam nisi sapiente maxime hic explicabo, odit cupiditate saepe ipsum tempore quis beatae nesciunt commodi. Aliquam sunt tempore pariatur delectus?</p> </div>
                    <div class="jawaban"><p>Iya, silahkan. loremlorem</p></div>
                </div>
                <div class="container text-center">
                    <div class="row">
                    <div class="col-md-8"><input class="form-control" type="text" placeholder="Tuliskan Pesan" aria-label="default input example"></div>
                    <div class="col-md-4"><img src="images/pesan.png" alt=""></div>
                    </div>
                
                </div>
                </div>
                <container class="input_data  ">
                <!-- dropdown tipe mobil -->
        
                <div class="dropdown">
                    <button
                    class="btn btn-primary dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
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
                <div  class="tanggal">
                    <input type="datetime-local" />
                </div>
                <!-- akhir datepicker -->
                </container>
                <container class="brand">
                <div class="toyota">
                    <img src="images/logo-toyota.png" alt="gambar logo toyota" />
                </div>
                <div class="mitsubishi">
                    <img src="images/logo-mitsubishi.png" alt="gambar logo toyota" />
                </div>
                </container>
                <!-- keunggulan -->
                <container class="keunggulan">
                <div class="title">
                    <h2>Kenapa Memillih Kami?</h2>
                </div>
                <div class="rowKeunggulan">
                    <div class="colKeunggulan">
                    <img src="images/sopir-berpengalaman.png" alt="">
                    <p>Sopir berpengalaman</p>
                    </div>
                    <div class="colKeunggulan">
                    <img src="images/pelayanan-berkualitas.png" alt="">
                    <p>Pelayanan Berkualitas</p>
                    </div>
                    <div class="colKeunggulan">
                    <img src="images/sewa mobil murah.png" alt="">
                    <p>Harga Terjangkau</p>
                    </div>
                </div>
                </container>
            
                <!-- Produk -->
                <container class="produk">
                <h2>Produk</h2>
                <div class="produk">
                    <div class="card-group">
                    <div class="card">
                        <img
                        src="images/new avanza.jpg"
                        class="card-img-top"
                        alt=" rental mobil avanza"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/xpander_prev_ui.png"
                        class="card-img-top"
                        alt="rental mobil xpander"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '2')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/toyota-rush1_prev_ui.png"
                        class="card-img-top"
                        alt="Rental Mobil Toyota Rush"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="produk">
                    <div class="card-group">
                    <div class="card">
                        <img
                        src="images/grand innova.jpg"
                        class="card-img-top"
                        alt="Rental mobil grand Innova"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/innova riborn.png"
                        class="card-img-top"
                        alt="Rental Mobil Innova riborn"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/venturer.png"
                        class="card-img-top"
                        alt="rental mobil venturer"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="produk">
                    <div class="card-group">
                    <div class="card">
                        <img
                        src="images/fortuner.png"
                        class="card-img-top"
                        alt="Rental mobil fortuner"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/pajero 1.svg"
                        class="card-img-top"
                        alt="Rental Mobil pajero"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/alphard 1.svg"
                        class="card-img-top"
                        alt="rental mobil Alphard"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="produk">
                    <div class="card-group">
                    <div class="card">
                        <img
                        src="images/vellfire (1).jpg"
                        class="card-img-top"
                        alt="Rental mobil Vellfire"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
        
                    <div class="card">
                        <img
                        src="images/hiace 1.svg"
                        class="card-img-top"
                        alt="Rental Mobil Hiace"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <img
                        src="images/bus pariwisata.svg"
                        class="card-img-top"
                        alt="rental bus"
                        />
                        <div class="card-body">
                        <div class="container text-center">
                            <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3"><span> tersedia</span></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h3>Xpander</h3></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3">
                                <img src="images/rating.png" alt="rating" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"><h5>Rp.560K/hari</h5></div>
                            </div>
                            </div>
                        </div>
                        <div class="buttonProduk">
                            <button><a href="{{route('checkout.create', '1')}}">Rental Sekarang</a></button>
                        </div>
                        <div class="buttonDetail">
                            <a href="/detailmobil">Detail</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
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
                        <img src="images/TESTIMONIAL LANDING PAGE.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/TESTIMONIAL LANDING PAGE.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/TESTIMONIAL LANDING PAGE.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="client d-flex align-content-center flex-wrap flex-column">
                    <h2>Client Kami</h2>
                    <div class="card-group">
                    <div class="card p-0">
                        <img src="images/client_wisata.jpeg" class="card-img-top" alt="..." style="width:100%;">
                        <div class="card-body  text-center">
                        <h5 class="card-title">Client</h5>
                        <p class="card-text">Orang Biasa </p>
                        </div>
                    </div>
                    <div class="card p-0">
                        <img src="images/client_tumming.jpeg" class="card-img-top p-0" alt="..." style="width:100%;">
                        <div class="card-body  text-center">
                        <h5 class="card-title">Tumming Abu</h5>
                        <p class="card-text">Komedian dan Kreator Konten</p>
                        </div>
                    </div>
                    <div class="card p-0">
                        <img src="images/client-arman.jpeg" class="card-img-top p-0" alt="..." style="width:100%;">
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
                <div class="tentangKami">
                <h2>Tentang Kami</h2>
                <div class="row justify-content-evenly">
                    <div class="col-4">
                    <div class="card" style="width: 18rem">
                        <img
                        src="images/logo sewa mobil makassar cv adinalta.png"
                        class="card-img-top"
                        alt="..."
                        />
                        <div class="card-body">
                        <h5 class="card-title">CV. ADINALTA</h5>
                        <p class="card-text">
                            Rental Mobil yang berpengalaman selama 100 Tahun
                        </p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="embed-responsive embed-responsive ratio-16x9 " >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.481682517147!2d119.45736307296771!3d-5.1866949947908045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee24df4c360c7%3A0x8e9b6475a11ea2a!2sJl.%20Minasa%20Upa%20No.M.16%2F8%2C%20RT.002%2FRW.09%2C%20Gn.%20Sari%2C%20Kec.%20Rappocini%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090222!5e0!3m2!1sid!2sid!4v1682946760914!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                </div>
                </div>
                <!-- informasi kerja sama -->
                <div class="kerjasama">
                <p>Ingin Melakukan Kerjasama dengan Kami?</p>
                <p>Hubungi Kami</p>
                <a href="#"><img src="images/informasi kerja sama rental mobil.png" alt="informasi kerja sama rental mobil" style="background:none;"></a>
                <p class="atau">atau</p>
                <button class="info">Daftar Disini</button>
        
                </div>
        
                <!-- Artikel -->
                <div class="artikel justify-content-lg-start">
                <h2>Artikel</h2>
                <div class="cardArtikel">
                    <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                        <div class="cardArtikel" style="width: 18rem">
                            <img
                            src="images/99 kubah.jpg"
                            class="card-img-top"
                            alt="destinasi wisata makassar"
                            />
                            <div class="card-body">
                            <h5 class="card-title">Masjid 99 Kubah</h5>
                            <p class="card-text">Makassar</p>
                            <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="cardArtikel" style="width: 18rem">
                            <img
                            src="images/apparalarang.png"
                            class="card-img-top"
                            alt="destinasi wisata makassar"
                            />
                            <div class="card-body">
                            <h5 class="card-title">Tebing Appalarang</h5>
                            <p class="card-text">Bulukumba</p>
                            <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="cardArtikel" style="width: 18rem">
                            <img
                            src="images/bira.png"
                            class="card-img-top"
                            alt="destinasi wisata makassar"
                            />
                            <div class="card-body">
                            <h5 class="card-title">Tanjung Bira</h5>
                            <p class="card-text">Bulukumba</p>
                            <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="cardArtikel" style="width: 18rem">
                            <img
                            src="images/bantimurung.jpeg"
                            class="card-img-top"
                            alt="destinasi wisata makassar"
                            />
                            <div class="card-body">
                            <h5 class="card-title">Bantimurung</h5>
                            <p class="card-text">Maros</p>
                            <a href="#" class="btn btn-dark">Lihat Selengkapnya</a>
                            </div>
                        </div>
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
                            <a href="#"><img src="images/fb (1).png" alt=""></a>
                            <a href="#"><img src="images/ig.png" alt=""></a>
                            <a href="#"><img src="images/twit.png" alt=""></a>                
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
                        <p>10 Tips Aman Berkendera</p>
                        <p>Cara Merawat Mobil Agar Terlihat Baru</p>
                        <p>Mulai Berbisnis Rental Mobil</p>
                        <p>Cara Menghilangkan Bau Pada Mobil</p>
                        </div>
                    </div>
                    <div class="col" id="colFooter">
                        <div class="wrapper-col-3">
                        <h1>Contact Us</h1>
                        <p>info@teamapp.com</p>
                        <p>Cara Merawat Mobil Agar Terlihat Baru</p>
                        <p>0821 2389 2913</p>
                        <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                        </div>
                    </div>
                    </div>
                    <div class="copyright">© Copyright CV. ADINALTA All Right Reserved</div>
                </footer>
                </section>
@endsection