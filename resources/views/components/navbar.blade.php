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
                <li class="nav-item">
                    <button type="button" class="btn btn-light" style="border-radius: 30px; ">
                        <a href="{{route('login')}}" style="text-decoration: none;">Login</a>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>