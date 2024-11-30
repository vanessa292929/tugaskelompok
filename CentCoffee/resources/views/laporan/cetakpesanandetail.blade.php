<!DOCTYPE html>
<html>
<head>
    <title>Laporan Detail Pesanan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Detail Pesanan</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Pesanan</th>
                <th>Nama Menu</th>
                <th>Jumlah Pesanan</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Status Pesanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $detail)
                <tr>
                    <td>{{ $detail->kode_pesanan }}</td>
                    <td>{{ $detail->menu->nama_menu }}</td> <!-- Mengambil nama menu dari relasi -->
                    <td>{{ $detail->jumlah_pesanan_detail }}</td>
                    <td>{{ number_format($detail->menu->harga_menu, 2, ',', '.') }}</td> <!-- Harga Satuan -->
                    <td>{{ number_format($detail->jumlah_pesanan_detail * $detail->menu->harga_menu, 2, ',', '.') }}</td> <!-- Total Harga -->
                    <td>{{ $detail->status_pesanan_detail == 'P' ? 'Pending' : 'Delivered' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
