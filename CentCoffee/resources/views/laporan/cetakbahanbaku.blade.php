<!DOCTYPE html>
<html>
<head>
    <title>Laporan Bahan Baku</title>
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
    <h1>Laporan Bahan Baku</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Bahan Baku</th>
                <th>Nama Bahan Baku</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Tanggal Kadaluarsa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $bahanbaku)
                <tr>
                    <td>{{ $bahanbaku->kode_bahan_baku }}</td>
                    <td>{{ $bahanbaku->nama_bahan_baku }}</td>
                    <td>{{ number_format($bahanbaku->stok_bahan_baku, 2, ',', '.') }}</td>
                    <td>{{ $bahanbaku->satuan_bahan_baku }}</td>
                    <td>{{ \Carbon\Carbon::parse($bahanbaku->tanggal_kadaluarsa_bahan_baku)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
