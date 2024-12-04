<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kinerja Pegawai dan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        .header {
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #000;
        }

        .header .subtitle {
            font-size: 14px;
            margin: 5px 0 0 0;
            color: #000;
        }

        .header .period {
            font-size: 12px;
            color: #555;
            margin: 0;
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
            color: #333;
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

    <div class="header">
        <h1>Laporan Kinerja Pegawai dan Penjualan</h1>
        <div class="subtitle">PT. CentCoffee</div>
        <div class="period">Periode: 2023-2024</div>
        <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jumlah Transaksi</th>
                <th>Total Penjualan (IDR)</th>
                <th>Menu yang Paling Banyak Terjual</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pegawai)
                <tr>
                    <td>{{ $pegawai->kode_pegawai }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->jumlah_transaksi }}</td>
                    <td>{{ $pegawai->total_penjualan }}</td>
                    <td>{{ $pegawai->menu_terbanyak }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
