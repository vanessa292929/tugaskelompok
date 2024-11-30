<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pengadaan Bahan Baku</title>
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
    <h1>Laporan Pengadaan Bahan Baku</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Pengadaan</th>
                <th>Subjek</th>
                <th>Tanggal Pengadaan</th>
                <th>Waktu Pengadaan</th>
                <th>Catatan</th>
                <th>Status</th>
                <th>Kode Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pengadaan)
                <tr>
                    <td>{{ $pengadaan->kode_pengadaan_bahan_baku }}</td>
                    <td>{{ $pengadaan->subjek_pengadaan_bahan_baku }}</td>
                    <td>{{ \Carbon\Carbon::parse($pengadaan->tanggal_pengadaan_bahan_baku)->format('d-m-Y') }}</td>
                    <td>{{ $pengadaan->waktu_pengadaan_bahan_baku }}</td>
                    <td>{{ $pengadaan->catatan_pengadaan_bahan_baku }}</td>
                    <td>{{ $pengadaan->status_pengadaan_bahan_baku }}</td>
                    <td>{{ $pengadaan->kode_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
