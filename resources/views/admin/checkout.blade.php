@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Pesanan</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-column mt-4" style="width: 100%;">
                <div class="container">
    
                    <div style="margin: 0 5%; border: 0;"> <!-- border-radius: 10px; overflow: hidden; -->
                        <table class="table table-bordered" style="table-layout: auto;">
                            <thead class="thead-dark" style="background-color: #6600BD; color: white;">
                              <tr>
                                <th  scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Paid Status</th>
                                <th style="width:8em" scope="col">Status</th>
                                <th style="width:7em" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            @forelse ($checkouts as $checkout)
                            
                              <tr>
                                <td scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $checkout->User->name }}</td> 
                                <td>{{ $checkout->product->title }}</td>
                                <td>{{ $checkout->tanggal_pesan }}</td>
                                <td>{{ $checkout->lokasi_penjemputan }}</td>
                                <td>
                                  @if ($checkout->is_paid)
                                  <span class="badge bg-success">Paid</span>
                                  @else
                                  <span class="badge bg-warning">Waiting</span>
                                  @endif 
                                  / {{ $checkout->metode_pembayaran}}</td>
                                <td>
                                  
                                  <form action="{{ route('admin.checkout.ubahstatus', $checkout->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status">
                                        <option value="" {{ $checkout->status == '' ? 'selected' : '' }}></option>
                                        <option value="proses" {{ $checkout->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                        <option value="penjemputan" {{ $checkout->status == 'penjemputan' ? 'selected' : '' }}>Penjemputan</option>
                                        <option value="selesai" {{ $checkout->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm mt-1">Ubah Status</button>

                                  </form>
                                </td>
                                <td>
                                    @if (!$checkout->is_paid)
                                            <form class="mt-10" action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                              @csrf
                                              <button class="btn btn-primary btn-sm">Set to Paid</button>
                                            </form>
                                          @endif
                                </td>
                                
                              </tr>
                            @empty
                              <tr>
                                <td colspan="3">Tidak Ada Pesanan</td>
                              </tr>
                            @endforelse
                            
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="d-flex flex-row-reverse" style="margin: 0 5% 2% 5%;">
                    <p class="hyperlink fs-6" style="margin-right: 3%; font-weight: 500; color: #350261">Lihat Semua</p>
                </div>

            </div>

@endsection