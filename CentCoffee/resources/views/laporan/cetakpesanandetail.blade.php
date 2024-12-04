<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Detail Pesanan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 10px;
            color: #333;
        }

        h1 {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            padding-bottom: 10px;
            color: #000;
        }

        .subtitle {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            margin-top: -5px;
        }

        .period {
            font-size: 12px;
            color: #777;
            margin-top: 0;
        }

        .date {
            font-size: 12px;
            color: #777;
            text-align: left;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
            font-size: 13px;
        }

        td {
            font-size: 12px;
            color: #555;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .footer {
            text-align: left;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Laporan Detail Pesanan</h1>
    <div class="subtitle">PT. CentCoffee</div>
    <div class="period">Periode 2023-2024</div>
    <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>

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
                    <td>{{ number_format($detail->menu->harga_menu, 2, ',', '.') }}</td> 
                    <td>{{ number_format($detail->jumlah_pesanan_detail * $detail->menu->harga_menu, 2, ',', '.') }}</td> <!-- Total Harga -->
                    <td>{{ $detail->status_pesanan_detail == 'P' ? 'Pending' : 'Delivered' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
