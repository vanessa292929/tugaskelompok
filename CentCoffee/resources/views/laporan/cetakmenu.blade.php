<!DOCTYPE html>
<html>
<head>
    <title>Laporan Performa Menu dan Penggunaan Bahan Baku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: #f2f2f2;
            color: #000;
            text-align: center;
            font-weight: bold;
        }
        td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #eaeaea;
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
