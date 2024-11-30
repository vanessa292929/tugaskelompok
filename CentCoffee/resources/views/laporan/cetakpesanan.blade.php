<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pesanan</title>
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
