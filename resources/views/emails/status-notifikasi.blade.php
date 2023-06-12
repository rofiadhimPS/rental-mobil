<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notifikasi Pesanan Baru</title>
</head>
<body>
    <h1>Notifikasi Pesanan Baru</h1>
    
    <p>Halo,</p>
    
    <p>Status Pesanan Anda Telah Berubah Sebagai Berikut:</p>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Tanggal Pesanan</th>
                <th>Mobil</th>
                <th>Lokasi Jemput</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $checkout->tanggal_pesan }}</td>
                <td>{{ $checkout->Product->title }}</td>
                <td>{{ $checkout->lokasi_penjemputan }}</td>
                <td>{{ $checkout->metode_pembayaran }}</td>
                <td>{{ $checkout->status }}</td>
            </tr>
        </tbody>
    </table>
    
    <p>
        @if($checkout->status == 'proses')
        Pesanan Anda telah dikonfirmasi.
        @elseif($checkout->status == 'penjemputan')
        Driver sedang menuju lokasi penjemputan Anda.
        @elseif($checkout->status == 'selesai')
        Pesanan telah selesai, Terima kasih telah menggunakan layanan kami
        @endif
    </p>

</body>
</html>
