<!DOCTYPE html>
<html>
<head>
    <title>Laporan Menu Detail</title>
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
