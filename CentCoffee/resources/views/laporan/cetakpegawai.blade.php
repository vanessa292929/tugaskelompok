<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kinerja Pegawai dan Penjualan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #d9d9d9; /* Warna abu muda */
            color: #333; /* Teks hitam */
            text-transform: uppercase;
            font-size: 14px;
        }
        td {
            font-size: 13px;
            color: #555;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Laporan Kinerja Pegawai dan Penjualan</h1>
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
    <div class="footer">
        <p>Generated on {{ now()->format('d M Y') }}</p>
    </div>
</body>
</html>
