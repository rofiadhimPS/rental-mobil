<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: linear-gradient(89.97deg, #35015f 0.02%, #6157ff 99.97%);">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">Cv.Adinalta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">    
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($title) && $title === 'beranda') ? 'active' : '' }}" aria-current="page" href="{{route('welcome')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($title) && $title === 'pesan') ? 'active' : '' }}" href="/user/pesanan">Pemesanan</a>
                    </li>
                    {{-- sudah login --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{ Auth::user()->name }}!
                            @if (Auth::user()->avatar)
                                <img src="{{ filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL) ? Auth::user()->avatar : asset('images/profil/'.Auth::user()->avatar) }}" alt="" width="30" height="24" style="border-radius: 50%">
                            @else
                                <img src="https://ui-avatars.com/api/?name=admin" alt="" width="30" height="24" style="border-radius: 50%">
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                @if (Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Saya</a>
                                @else
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard Saya</a>
                                @endif
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('user.akun')}}">Profil Saya</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Notifikasi</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light" style="border-radius: 30px; ">
                            <a href="{{route('login')}}" style="text-decoration: none;">Login</a>
                        </button>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
