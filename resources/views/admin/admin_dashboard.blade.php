@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Dashboard</h1>
                </div>
            </nav>

            <div class="d-flex flex-row justify-content-evenly" style="margin: 3% 0">
                <div class="card" style="width: 25%;">
                    <div class="card-body">
                        <h4 class="card-title">Total Pesanan</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">1.500</h1>
                            <h5 class="card-text"></h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 25%;">
                    <div class="card-body">
                        <h4 class="card-title">Total Pengguna</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">10.000</h1>
                            <h5 class="card-text">Orang</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 25%;">
                    <div class="card-body">
                        <h4 class="card-title">Total Produk</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">10</h1>
                            <h5 class="card-text">Item</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-evenly align-items-center" style="margin: 5% 0;">
                <div style="width: 55%">
                    <h4>Grafik Pemesanan & Pengunjung</h4>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="d-flex flex-row" style="width: 30%;">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>
@endsection