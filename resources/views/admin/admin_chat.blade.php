@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Chat</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-row" style="margin: 1.5%; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); width: 55%; border-radius: 10px;">
                <div class="d-flex justify-content-center" style="background-color: #9B96E8; width: 14%; padding: 2%; border-radius: 10px 0 10px 10px">
                    <img src="{{ asset('assets/Profile Icon.png') }}" style="width: 90%;">
                </div>
                <div class="d-flex flex-column" style="width: 100%; overflow: hidden; margin: 0 1.5%;">
                    <div class="chat__name d-flex align-items-center fs-4" style="padding-left: 1%;">Johni</div>
                    <div class="chat__text d-flex flex-row fs-6 " style="padding-left: 1%;">Halo, Apakah ada mobil ini?</div>
                </div>
                <div class="chat__time ms-auto d-flex align-items-end" style="padding: 1%; border-radius: 0 10px 10px 0;">15 Maret 2023</div>
            </div>
@endsection