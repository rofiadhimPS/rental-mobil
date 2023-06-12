<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Mobil</title>
    <meta
      name="description"
      content="Rental mobil Makassar menyediakan sewa mobil dengan pelayanan berkualitas, murah dan mengutamakan kenyamanan. Rental mobil makassar menyediakan berbagai macam mobil sesuai dengan kebutuhan dan keinginan client."
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&family=Poppins:ital,wght@0,100;1,200&family=Roboto:wght@900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />
    <link rel="icon" href="{{ asset('assets/tkro.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
  </head>
  <style>
    button a{
      text-decoration : none;
    }
  </style>
  <body>
         <!-- navbar -->
 @include('components.navbar')
 <!-- akhir navbar -->
 
    <!-- cardProfil -->
    <!-- card -->
    <section class="section-pesanan mt-5">
      <div class="container">
          <h3 class="text-uppercase fs-3 fw-bold text-center pt-5">Status Pesanan</h3>
          <div class="card d-flex flex-row " style="margin-left: 20px; width: 90%;border-radius: 10px; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); flex-wrap:wrap; justify-content: flex-center;">
            <div class="d-flex align-items-center justify-content-center" style="background-color: #ffffff40">
              <img style="width:80%;" src="{{ asset('images/'.$products->icon) }}" >
            </div>
            <div class="d-flex align-items-center"style="margin-left: 7%">
              <div class="d-flex flex-column" >
                  <h5 class="card-title fw-bold fs-1">{{ $products->title }}</h5>
                  <p class="card-text fs-2 fw-normal m-0">Rp{{ $products->price }}</p>
                  <p class="card-text"><small class="text-muted"> <img src="{{ asset('images/star.png') }}" alt="rating rental mobil">4.0 | 8 Kali Terpesan</small> </p>
                  
                  <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                  <h5>Tahun             : {{ $products->tahun }}</h5>
                  <h5>Metode Pembayaran : {{ $products->metode_bayar }}</h5>
                  <h5>Jumlah Seat       : {{ $products->seat }}</h5>
                  <h5>Status            : {{ $products->is_tersedia == 1 ? 'Tersedia' : 'Tidak'; }}</h5>
                  @if ($checkouts != null)
                  <h5>Ada Pesanan Tanggal         :</h5>
                  <ul>
                      @foreach ($checkouts as $checkout)
                      <li>{{ $checkout }}</li>
                      @endforeach
                  </ul>
                  @endif

              </div> 
            </div>   
          </div>
          <!-- <div class="d-flex align-items-center flex-column">
              <button type="button" class="btn-lg " style="border-radius: 50%; padding: 0 15px; z-index: 2;"><h1>></h1></button>
          </div> -->
      </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Review dan Komentar -->
   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
