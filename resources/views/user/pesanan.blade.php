<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  </head>
  <style>
    .card-text img{
      width : 20px;
    }
    button a{
      text-decoration : none;
      color:#fff;
    }

  </style>
  <body>
    @include('components.navbar')
    <section>
        <div class="d-flex flex-column align-items-center">
          <div style="margin-top: 4%">
            <h1>Status Pesanan</h1>
          </div>
          @forelse ($pesans as $pesan)
          <div class="card d-flex flex-row justify-content-center" style="margin: 4% 0; width: 85%;border-radius: 10px; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); flex-wrap:wrap; justify-content: flex-center;">
            <div class="d-flex align-items-center" style="background-color: #ffffff40">
              <img style="width:80%;" src="{{ asset('images/'.$pesan->product->icon) }}" >
            </div>
            <div class="d-flex align-items-center"style="margin-left: 7%">
              <div class="d-flex flex-column mb-3 mt-1" >
                  <h5 class="card-title fw-bold fs-1">Fortuner</h5>
                  <p class="card-text fs-2 fw-normal m-0">Rp500.000</p>
                  <p class="card-text"><small class="text-muted"> <img src="{{ asset('images/star.png') }}" alt="rating rental mobil">4.0 | 8 Kali Terpesan</small> </p>
                  
                  <h5 class="" style="border: 1px solid #6157FF; width: fit-content; padding: 8px 40px; margin: 40px 0 20px; border-radius: 10px;">Spesifikasi</h5>
                  <h5>Tipe Mobil          : {{ $pesan->product->title }}</h5>
                  <h5>Tanggal Penjemputan : {{ $pesan->tanggal_pesan }}</h5>
                  <h5>Lokasi Penjemputan  : {{ $pesan->lokasi_penjemputan }}</h5>
                  <h5>Metode Pembayaran   : {{ $pesan->metode_pembayaran }}</h5>
                  <h5>Status              : {{ $pesan->status ? $pesan->status : '-' }}</h5>

              </div> 
            </div>   
          </div>

          <div style="margin-bottom: 4%;">
            <button type="button" onclick="handleDelete({{ $pesan->id }})" class="btn btn-primary btn-lg fs-4" style=" background-color: black;  border: 0;" data-bs-toggle="modal" data-bs-target="#exampleModal">Batalkan Pesanan</button>
          </div>
          @empty
            <div class="cardPesanan" style="text-align: center;">
            <div class="card mb-3" style="max-width: 540px; margin-left: 0px;">
               <div class="row g-0">
                 <div class="col-md-4" style=" padding:0px;">
                   <img src="{{ asset('images/status-kosong.png') }}" class="img-fluid rounded-start" alt="tidak ada pesanan">
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <p class="card-text">Tidak ada Pesanan</p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           </div>
          @endforelse
          

         

          <!-- Modal -->
          <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #360363;">
                  <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Batalkan Pesanan?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <img src="{{ asset('images/Website development.png') }}">
                </div>
                <div class="modal-footer d-flex flex-column">
                  <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary"  style="background-color: black;">Iya, Batalkan</button>
                  </form>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                </div>
              </div>
            </div>
          </div>

        </div>

        

    </section>
    <script>
      function handleDelete(id){
          var id = id;
          var url = "{{ route('user.pesanan.destroy', ':id') }}".replace(':id', id);

          $('#deleteModal').modal('show')
          $('#deleteModal form').attr('action', url);
      }
  </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>  