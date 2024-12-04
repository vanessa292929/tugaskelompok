<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pesanan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%; /* Bisa disesuaikan dengan kebutuhan */
            border-collapse: collapse;
            margin: 0 auto; /* Menambahkan ini untuk memusatkan tabel */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Background color for header */
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }

        td {
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e1f5e1;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .currency {
            text-align: right;
        }

        .date {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Pesanan</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Pesanan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Pembeli</th>
                <th>Catatan</th>
                <th>Harga</th>
                <th>Tunai</th>
                <th>Status</th>
                <th>Kode Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pesanan)
                <tr>
                    <td>{{ $pesanan->kode_pesanan }}</td>
                    <td>{{ \Carbon\Carbon::parse($pesanan->tanggal_pesanan)->format('d-m-Y') }}</td>
                    <td>{{ $pesanan->waktu_pesanan }}</td>
                    <td>{{ $pesanan->pembeli_pesanan }}</td>
                    <td>{{ $pesanan->catatan_pesanan }}</td>
                    <td>{{ number_format($pesanan->harga_pesanan, 2, ',', '.') }}</td>
                    <td>{{ number_format($pesanan->tunai_pesananan, 2, ',', '.') }}</td>
                    <td>{{ $pesanan->status_pesanan }}</td>
                    <td>{{ $pesanan->kode_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
