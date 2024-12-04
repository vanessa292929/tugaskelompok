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
        <h1>Laporan Pengadaan Bahan Baku</h1>
        <div class="subtitle">PT. CentCoffee</div>
        <div class="period">Periode: 2023-2024</div>
        <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>
    </div>
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
