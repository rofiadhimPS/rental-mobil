@extends('layouts.app')

@section('content') 
  <form action="{{route('checkout.store', $product->id)}}" class="basic-form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container__form d-flex p-2 d-flex d-flex flex-column mb-3 justify-content-center mx-auto" style="width: 60%; margin-top:100px;">
      <div class="pageTitle" style="width: 60%;">
        <h1>Pemesanan {{$product->title}}</h1>
      </div>
      <div class="mb-3 d-flex flex-column">
        <label for="formGroupExampleInput" class="form-label" >Nama Lengkap</label>
        <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"  id="formGroupExampleInput" value="{{Auth::user()->name}}" required>
        @if ($errors->has('name'))
          <p class="text-danger">{{$errors->first('name')}}</p>
        @endif
      </div>
      <div class="mb-3 d-flex flex-column">
        <label for="formGroupExampleInput2" class="form-label">No. Hp</label>
        <input name="phone_number" type="text" class="form-control {{$errors->has('phone_number') ? 'is-invalid' : ''}}"  id="formGroupExampleInput2" placeholder="082xxxxxxxxx" value="{{ old('phone_number') }}" required>
        @if ($errors->has('phone_number'))
          <p class="text-danger">{{$errors->first('phone_number')}}</p>
        @endif
      </div>
      <div class="mb-3 d-flex flex-column">
        <label for="formGroupExampleInput3" class="form-label">Tanggal Pesanan</label>
        <input name="tanggal_pesan" type="datetime-local" class="form-control {{$errors->has('tanggal_pesan') ? 'is-invalid' : ''}}"  id="formGroupExampleInput3" placeholder="Pilih Tanggal" value="{{ old('tanggal_pesan') }}" required>
        @if ($errors->has('tanggal_pesan'))
          <p class="text-danger">{{$errors->first('tanggal_pesan')}}</p>
        @endif
      </div>
      <div class="mb-3 d-flex flex-column">
        <label for="formGroupExampleInput3" class="form-label">Lokasi Penjemputan</label>
        <input name="lokasi_penjemputan" type="text" class="form-control {{$errors->has('lokasi_penjemputan') ? 'is-invalid' : ''}}" id="formGroupExampleInput3" placeholder="Ex: Bandara Hasanuddin"  value="{{ old('lokasi_penjemputan') }}" required>
        @if ($errors->has('lokasi_penjemputan'))
          <p class="text-danger">{{$errors->first('lokasi_penjemputan')}}</p>
        @endif
      </div>
      <div class="mb-3 d-flex flex-column">
        <label for="formGroupExampleInput3" class="form-label">Metode Pembayaran</label>
        <select name="metode_pembayaran" class="form-select {{$errors->has('metode_pembayaran') ? 'is-invalid' : ''}}" aria-label="Default select example" required>
            <option value="" disabled hidden>Pilih Metode</option>
            <option value="Transfer" {{ old('metode_pembayaran') === 'Transfer' ? 'selected' : '' }}>Transfer</option>
            <option value="Cash" {{ old('metode_pembayaran') === 'Cash' ? 'selected' : '' }}>Cash</option>
        </select>
        @if ($errors->has('metode_pembayaran'))
            <p class="text-danger">{{$errors->first('metode_pembayaran')}}</p>
        @endif
    </div>    
    <div class="mb-3">
      <label for="formFile" class="form-label">Foto Bukti Pembayaran</label>
      <input name="bukti" class="form-control {{$errors->has('bukti') ? 'is-invalid' : ''}}" type="file" id="formFile">
      @if ($errors->has('bukti'))
          <p class="text-danger">{{$errors->first('bukti')}}</p>
      @endif
  </div>  
      <div>
        <button type="submit" class="w-100 btn btn-primary">Pesan Sekarang</button>
      </div>
    </div>
  </form>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
@endsection




 {{-- <!-- cardProfil -->
 
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Profil</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <div class="row">
          <div class="col-sm-4">
              <img src="assets/" alt="">
          </div>
          <div class="col-sm-8" >
              <div class="row m-0">Nama Kamu</div>
              <div class="row m-0">@namakamu</div>
          </div>
          <div class="row mt-0 mb-0">
              <div class="list-group">
                  <a href="edit_akun.html" class="list-group-item list-group-item-action">Edit Akun</a>
                  <a href="profil.html" class="list-group-item list-group-item-action">Profil</a>
                  <button type="button" class="list-group-item list-group-item-action" style=" border: 1;" data-bs-toggle="modal" data-bs-target="#exampleModal">Log Out</button>
                  <button type="button" class="list-group-item list-group-item-action bg-danger text-white" style=" border: 1;" data-bs-toggle="modal" data-bs-target="#exampleModalHapus">Hapus Akun</button>
                  
                </div>
          </div>
        </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #360363; flex-direction: space-between;">
        <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Yakin ingin keluar?</h5>
      </div>
      <div class="modal-body d-flex justify-content-center md-3">
        <img src="assets/logging off.png">
      </div>
      <div class="modal-footer d-flex flex-column">
        <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="home.html" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="nonePesanan.html"> Iya, keluar </a></button>
        <a href="home_versiProfil.html" style="color:#252525">Tidak</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal Hapus Akun -->
<div class="modal fade" id="exampleModalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #360363; flex-direction: space-between;">
        <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Hapus Akun?</h5>
      </div>
      <div class="modal-body d-flex justify-content-center md-3">
        <img src="assets/logging off.png">
      </div>
      <div class="modal-footer d-flex flex-column">
        <button type="button" class="btn btn-primary"  style="background-color: black; "> <a href="home.html" style="text-decoration: none; color:#fff;" data-toggle="modal" data-target="#"href="nonePesanan.html"> Iya, hapus </a></button>
        <a href="home_versiProfil.html" style="color:#252525">Tidak</a>
      </div>
    </div>
  </div>
</div> --}}