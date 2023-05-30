@extends('components.sidebar');

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Produk</h1>
                </div>
            </nav>
    
            <div class="d-flex justify-content-end" style="width: 100%;">
                <div style="margin: 3% 5% 3% ;">
                    <form action="/admin/produk/tambahmobil" method="GET">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: black;">Tambahkan Mobil</button>
                </form>
                </div>
            </div>

            <div class="d-flex flex-wrap d-grid gap-5" style="padding: 0 0 0 3%;">
                @foreach ($products as $product)
                <div class="card" style="width: 18rem; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%);">
                    <img class="card-img-top" src="{{ asset('images/'.$product->icon) }}" alt="Card image cap" style="padding: 5%;">
                    <div class="card-body d-flex flex-column justify-content-center">
                      <h5 class="card-title">{{ $product->title }}</h5>
                      <p class="card-text">{{ $product->price }}K/Hari</p>
                      <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                      <form class="mt-1 d-flex justify-content-center" action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Hapus</button>
                      </form>
                    </div>
                </div>
                @endforeach
            </div>
@endsection