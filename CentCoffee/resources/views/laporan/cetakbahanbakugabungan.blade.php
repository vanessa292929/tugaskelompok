<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Analisis Pemakaian dan Pengadaan Bahan Baku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        h1 {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #000;
        }

        .subtitle {
            font-size: 14px;
            margin: 5px 0 0 0;
            color: #000;
        }

        .period {
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
            color: #000;
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

    <h1>Laporan Analisis Pemakaian dan Pengadaan Bahan Baku</h1>
    <div class="subtitle">PT. CentCoffee</div>
    <div class="period">Periode: 2023-2024</div>
    <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>

    <table>
        <thead>
            <tr>
                <th>Kode Bahan Baku</th>
                <th>Nama Bahan Baku</th>
                <th>Stok Saat Ini</th>
                <th>Jumlah Pengadaan</th>
                <th>Jumlah Pemakaian di Menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $bahanbaku)
                <tr>
                    <td>{{ $bahanbaku->kode_bahan_baku }}</td>
                    <td>{{ $bahanbaku->nama_bahan_baku }}</td>
                    <td>{{ $bahanbaku->stok_bahan_baku }} {{ $bahanbaku->satuan_bahan_baku }}</td>
                    <td>{{ $bahanbaku->jumlah_pengadaan }} {{ $bahanbaku->satuan_bahan_baku }}</td>
                    <td>{{ $bahanbaku->jumlah_pemakaian }} {{ $bahanbaku->satuan_bahan_baku }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
