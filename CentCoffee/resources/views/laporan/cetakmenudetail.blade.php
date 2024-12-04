<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Menu Detail</title>
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

    <h1>Laporan Menu Detail</h1>
    <div class="subtitle">PT. CentCoffee</div>
    <div class="period">Periode: 2023-2024</div>
    <div class="period">Tanggal Cetak: {{ now()->format('d F Y') }}</div>

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
                    <td>{{ $detail->menu->nama_menu }}</td>
                    <td>{{ $detail->kode_bahan_baku }}</td>
                    <td>{{ $detail->bahanBaku->nama_bahan_baku }}</td>
                    <td>{{ number_format($detail->jumlah_bahan_baku_detail, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
