@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Akun</h1>
                </div>
            </nav>
    
            <div class="d-flex flex-row position-relative" style="margin: 1.5%; background-color: #BBB5FF; box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); width: 97%; border-radius: 10px; height: 15vh;">
                <div class="d-flex justify-content-center position-absolute top-100 start-50 translate-middle" style="width: 100%;">
                    <img src="{{ asset('images/Profile Picture.png') }}" style="border-radius: 50%; width: 12%;">
                    <div class="d-flex justify-content-center" style="background-color: #350261; width: fit-content; border-radius: 50%; padding: 0.3% 0; position: absolute; bottom: 12%; right: 44%;"><img src="{{ asset('images/Camera Icon.png') }}" style="width: 60%;"></div>
                </div>
                
            </div>

            <div class="d-flex" style="margin: 11.5% 1.5% 1.5%;">
                <form class="d-grid gap-3" style="margin-left: 5%;" action="{{ route('admin.akun.update') }}" method="POST">
                    <div class="form-group d-flex flex-column d-grid gap-2">
                        <label for="name" class="fs-5">Nama</label>
                        <input type="text" class="form-control-lg" id="name" name="name" placeholder="Kemal Kamaruddin" style="width: 500px" value="{{ $users->name }}" required>
                    </div>
                    <div class="form-group d-flex flex-column d-grid gap-2">
                        <label for="no_telp" class="fs-5">No Telepon</label>
                        <input type="tel" class="form-control-lg" id="no_telp" name="no_telp" placeholder="0862266228xx" style="width: 500px" value="{{ $users->no_telp }}" required>
                    </div>
                    <div class="form-group d-flex flex-column d-grid gap-2">
                        <label for="email" class="fs-5">Email</label>
                        <input type="email" class="form-control-lg" id="email" name="email" placeholder="nama@example.com" style="width: 500px" value="{{ $users->email }}" required>
                    </div>
                    <div class="form-group d-flex flex-column d-grid gap-2">
                        <label for="password" class="fs-5">Password</label>
                        <input type="password" class="form-control-lg" id="password" name="password" placeholder="password anda" style="width: 500px" required>
                    </div>
                    <input class="btn btn-primary fs-5" type="submit" value="Simpan" style="width: 35%; background-color: black; color: white; border-radius: 10px;">
                </form>
            </div>
            <a class="btn btn-primary fs-5" style="margin: -0.5% 0 2% 8%"; href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>

@endsection