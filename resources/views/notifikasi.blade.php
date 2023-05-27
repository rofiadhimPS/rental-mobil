<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link rel="stylesheet" href="{{ asset('css/notifikasi.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />
</head>
<body>
     <!-- navbar -->
  @include('components.navbar')
 <!-- akhir navbar -->
 
    <!-- cardProfil -->


    <div class="row container-fluid" style="padding-top:60px; height:100vh;">
        <div class="card-notification h-100">
            <div class="card-body d-flex">
              <div class="icon-card">
                <img class=" img-icon" src="{{ asset('images/icon bayar.png') }}" alt="pembayaran sewa mobil">
              </div>
              <div class="text-notification p-3 ">
                <div class="fs-6">Pembayaran Dikonfirmasi</div>
              </div>

            </div>
            <div class="card-body d-flex">
              <div class="icon-card">
                <img class=" img-icon" src="{{ asset('images/icon bayar.png') }}" alt="pembayaran sewa mobil">
              </div>
              <div class="text-notification p-3 ">
                <div class="fs-6">Pesanan Dibatalkan</div>
              </div>

            </div>
        </div>
        

    </div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
crossorigin="anonymous">
</script>
</body>
</html>