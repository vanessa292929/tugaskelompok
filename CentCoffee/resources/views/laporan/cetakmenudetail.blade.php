<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Menu Detail</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 5px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%; /* Menyesuaikan lebar tabel */
            border-collapse: collapse;
            margin: 0 auto; /* Memusatkan tabel */
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Warna latar belakang header */
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
    <h1>Laporan Menu Detail</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Kode Bahan Baku</th>
                <th>Nama Bahan Baku</th>
                <th>Jumlah Bahan Baku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $detail)
                <tr>
                    <td>{{ $detail->kode_menu }}</td>
                    <td>{{ $detail->menu->nama_menu }}</td> <!-- Mengambil nama menu dari relasi -->
                    <td>{{ $detail->kode_bahan_baku }}</td>
                    <td>{{ $detail->bahanBaku->nama_bahan_baku }}</td> <!-- Mengambil nama bahan baku dari relasi -->
                    <td>{{ number_format($detail->jumlah_bahan_baku_detail, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
