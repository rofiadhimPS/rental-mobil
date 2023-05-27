@extends('layout.main');

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Pesanan</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-column " style="width: 100%;">
                <div class="container">
                    <div class="dropdown" style="margin: 3% 5% 2% 5%;">
                      <button class="btn dropdown-toggle btn-dropdown fs-3" id=" dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                        Minggu ini
                      </button>
                      <ul class="dropdown-menu" id="timeFilter" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Minggu ini</a></li>
                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Selesai</a></li>
                        <li><a class="dropdown-item" href="#">Penjemputan</a></li> -->
                      </ul>
                    </div>
    
                    <div style="margin: 0 5%; border: 0;"> <!-- border-radius: 10px; overflow: hidden; -->
                        <table class="table table-bordered" style="table-layout: fixed;">
                            <thead class="thead-dark" style="background-color: #6600BD; color: white;">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($checkouts as $chot)
                            
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $chot->user_id }}</td>
                                <td>{{ $chot->lokasi_penjemputan }}</td>
                                <td>{{ $chot->metode_pembayaran}}</td>
                                <td>{{ $chot->tanggal_pesan }}</td>
                                <td>Avanza</td>
                                <td class="d-flex justify-content-center">
                                  <div class="dropdown">
                                    <button class="btn dropdown-toggle btn-dropdown dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                      Pilih
                                    </button>
                                    <ul class="dropdown-menu orderStatus" aria-labelledby="dropdownMenuButton">
                                      <li><a class="dropdown-item" href="#">Konfirmasi</a></li>
                                      <li><a class="dropdown-item" href="#">Batalkan</a></li>
                                      <li><a class="dropdown-item" href="#">Selesai</a></li>
                                      <li><a class="dropdown-item" href="#">Penjemputan</a></li>
                                    </ul>
                                  </div>
                                  {{-- <span>{{ $chot->status }}</span>
                                  @if ($chot->status != 'Batalkan')
                                    <form action="{{ route('pesanan.update', $chot->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <select name="new_status">
                                        <option value="Pesan" {{ $chot->status == 'Pesan' ? 'selected' : '' }}>Pesan</option>
                                      </select>
                                    </form>
                                    
                                  @endif --}}
                                </td>
                                
                              </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="d-flex flex-row-reverse" style="margin: 0 5% 2% 5%;">
                    <p class="hyperlink fs-6" style="margin-right: 3%; font-weight: 500; color: #350261">Lihat Semua</p>
                </div>

            </div>

@endsection