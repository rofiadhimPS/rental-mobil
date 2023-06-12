@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Notifikasi</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-row" style="margin: 1.5%; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); width: 85%; border-radius: 10px;">
                <div class="d-flex justify-content-center" style="background-color: #9B96E8; width: 12%; height: 11vh; padding: 1.5% 0; border-radius: 10px 0 10px 10px">
                    <img src="{{ asset('assets/Component 8.png') }}" style="width: 50%; padding: 0 5%;">
                </div>
                <div class="notif__text d-flex align-items-center fs-5" style="padding-left: 1%;">Pesanan baru masuk</div>
                <div class="notif__time ms-auto d-flex align-items-end" style="padding: 1%; border-radius: 0 10px 10px 0;">15 Maret 2023</div>
            </div>

@endsection