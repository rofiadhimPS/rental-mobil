<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rental Mobil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/pesanan.css')}}">
        <link rel="icon" href="{{asset('images/tkro.png')}}" />
    </head>
    <body>
        <!-- navbar -->
          @include('components.navbar')
        <!-- akhir navbar -->
        
        <section class="section-pesanan mt-2">
            <div class="container">
                <h3 class="text-uppercase fs-3 fw-bold text-center">Status Pesanan</h3>
                <div class="card mt-5" style="max-width: max-content;border: 0;">
                    <div class="row g-5">
                        <div class="col">
                            <img src="{{ asset('images/avanza.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col justify-content-center">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-1">{{$product->title}}</h5>
                                <p class="card-text fs-2 fw-normal m-0">Rp {{$product->price}}</p>
                                <p class="card-text"><small class="text-muted">4.0 | {} Kali Terpesan</small> </p>
                                
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                                <h5>Tipe Mobil        : {{$product->title}} </h5>
                                <h5>Tahun             : {{$product->tahun}}</h5>
                                <h5>Metode Pembayaran : {{$checkout->metode_pembayaran }}</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                  <p class="text-center mt-5 fs-3 fw-bolder text-">Berhasil Checkout</p>
                </div>
                <div class="d-flex align-items-center flex-column">
                  <a class="border py-2 px-4 pr- bg-success rounded-pill text-center text-white fs-7 fw-semibold" style="text-decoration: none" href="{{route('dashboard')}}" >My Dashbord</a>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>


{{-- 
@extends('layouts.app')

@section('content')
<section class="section-pesanan mt-5">
  <div class="container">
      <h3 class="text-uppercase fs-3 fw-bold text-center">Status Pesanan</h3>
      <div class="card mt-5" style="max-width: max-content;border: 0;">
          <div class="row g-5">
              <div class="col">
                  <img src="{{ asset('images/avanza.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col justify-content-center">
                  <div class="card-body">
                      <h5 class="card-title fw-bold fs-1">Fortuner</h5>
                      <p class="card-text fs-2 fw-normal m-0">Rp500.000</p>
                      <p class="card-text"><small class="text-muted">4.0 | 8 Kali Terpesan</small> </p>
                      
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                      <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                      <h5>Tipe Mobil        : Xxxx</h5>
                      <h5>Tahun             : 2018</h5>
                      <h5>Warnae            : Silver, Hitam, Putih</h5>
                      <h5>Metode Pembayaran : Transfer</h5>
                  </div>
                  
              </div>
          </div>
      </div>
      <div class="d-flex align-items-center flex-column">
        <p class="text-center mt-5 fs-3 fw-bolder">Berhasil Checkout</p>
      </div>
      <div class="d-flex align-items-center flex-column">
        <a class="border py-2 px-4 pr- bg-success rounded-pill text-center text-white fs-7 fw-semibold " href="" >My Dashbord</a>
      </div>
  </div>
</section>
@endsection --}}