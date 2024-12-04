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
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%; /* Bisa disesuaikan dengan kebutuhan */
            border-collapse: collapse;
            margin: 0 auto; /* Memusatkan tabel */
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
