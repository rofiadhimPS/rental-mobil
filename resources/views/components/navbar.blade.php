<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: linear-gradient(89.97deg, #35015f 0.02%, #6157ff 99.97%);">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">Cv.Adinalta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesanan">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notifikasi">Notifikasi</a>
                </li>
                @auth
                    {{-- sudah login --}}
                    <li class="d-flex nav-item user-logged dropdown no-arrow">
                        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{Auth::user()->name}}!
                            @if (Auth::user()->avatar)
                            <img class="" src="{{Auth::user()->avatar}}" alt="" width="30" height="24" style="border-radius: 50%">
                            @else
                            <img src="https://ui-avatars.com/api/?name=admin" class="user-photo" alt="" width="30" height="24" style="border-radius: 50%">
                            @endif
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                                <li>
                                    <a class="dropdown-item" href="#">My Dashboard</a>
                                </li>
                                <li><a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </li>
                            </ul>
                        </a>
                    </li>
                @else
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