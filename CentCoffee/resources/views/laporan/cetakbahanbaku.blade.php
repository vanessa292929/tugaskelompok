<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bahan Baku Individu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Bahan Baku Individu</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Bahan Baku</th>
                <th>Nama Bahan Baku</th>
                <th>Stok</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $bahanBaku)
                <tr>
                    <td>{{ $bahanBaku->kode_bahan_baku }}</td>
                    <td>{{ $bahanBaku->nama_bahan_baku }}</td>
                    <td>{{ $bahanBaku->stok_bahan_baku }}</td>
                    <td>{{ $bahanBaku->satuan_bahan_baku }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
