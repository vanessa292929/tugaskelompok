<!DOCTYPE html>
<html>
<head>
    <title>Laporan Analisis Pemakaian dan Pengadaan Bahan Baku</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
            font-size: 14px;
        }
        td {
            font-size: 13px;
            color: #555;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Laporan Analisis Pemakaian dan Pengadaan Bahan Baku</h1>
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
    <div class="footer">
        <p>Generated on {{ now()->format('d M Y') }}</p>
    </div>
</body>
</html>
