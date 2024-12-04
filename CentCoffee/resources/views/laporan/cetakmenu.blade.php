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
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #000;
        }
        .subtitle {
            font-size: 14px;
            color: #000;
            margin: 0;
            margin-top: 5px;
        }
        .period {
            font-size: 12px;
            color: #555;
            margin: 0;
            margin-top: 10px;
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
            font-size: 13px;
        }
        td {
            text-align: left;
            padding: 8px;
            font-size: 12px;
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
    <div class="subtitle">PT. CentCoffee</div>
    <div class="period">Periode: 2023-2024</div>
    <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>

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
