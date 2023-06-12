@extends('components.sidebar')

@section('style')
<style>
    .card{
        width: 25%;
    }

    

    @media (max-width: 768px) {
   .container-info {
      flex-direction: column !important;
      justify-content: center !important;
      }
    
    .container-chart{
        flex-direction: column !important;
    }

    .card{
        width: 90%;
        margin: auto;
    }

    .chart{
        width: 90% !important;
    }
    }
</style>
@endsection

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>Dashboard</h1>
                </div>
            </nav>

            <div class="d-flex flex-row justify-content-evenly container-info" style="margin: 3% 0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Pesanan</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">{{ $totalPesananSelesai }}</h1>
                            <h5 class="card-text"></h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Pengguna</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">{{ $userCount }}</h1>
                            <h5 class="card-text">Orang</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Produk</h4>
                        <div class="d-flex flex-row align-items-center justify-content-center d-grid gap-2">
                            <h1 class="card-text">{{ $productCount }}</h1>
                            <h5 class="card-text">Item</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-evenly align-items-center container-chart" style="margin: 5% 0;">
                <div class="chart" style="width: 55%">
                    <h4>Grafik Pemesanan & Pengunjung</h4>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart" style="width: 30%;">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var lineChart = new Chart("lineChart", {
    type: "line",
    data: <?php echo $jsonData; ?>,
    options: {
        // Konfigurasi dan opsi tambahan
    }
});





</script>

@endsection