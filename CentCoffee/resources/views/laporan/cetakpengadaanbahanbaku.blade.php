<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengadaan Bahan Baku</title>
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
            width: 80%; /* Menyesuaikan lebar tabel */
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
