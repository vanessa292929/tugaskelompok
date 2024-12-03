<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kinerja Pegawai dan Penjualan</title>
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
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
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
</body>
</html>
