<!DOCTYPE html>
<html>
<head>
    <title>Laporan Performa Menu dan Penggunaan Bahan Baku</title>
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
    <h1>Laporan Performa Menu dan Penggunaan Bahan Baku</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Total Penjualan (IDR)</th>
                <th>Jumlah Bahan Baku Digunakan</th>
                <th>Jumlah Pesanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                <tr>
                    <td>{{ $menu->kode_menu }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ number_format($menu->total_penjualan, 0, ',', '.') }}</td>
                    <td>{{ $menu->jumlah_bahan_baku }}</td>
                    <td>{{ $menu->jumlah_pesanan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
