<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notifikasi Pesanan Baru</title>
</head>
<body>
    <h1>Notifikasi Pesanan Baru</h1>
    
    <p>Halo, Admin</p>
    
    <p>Anda telah menerima pesanan baru dengan rincian sebagai berikut:</p>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Pemesan</th>
                <th>Tanggal Pesanan</th>
                <th>Mobil</th>
                <th>Lokasi Jemput</th>
                <th>Pembayaran</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $checkout->User->name }}</td>
                    <td>{{ $checkout->tanggal_pesan }}</td>
                    <td>{{ $checkout->Product->title }}</td>
                    <td>{{ $checkout->lokasi_penjemputan }}</td>
                    <td>{{ $checkout->metode_pembayaran }}</td>
                </tr>
        </tbody>
    </table>
    
    <p>Mohon segera proses pesanan tersebut.</p>
    
    <p>Terima kasih.</p>
</body>
</html>
