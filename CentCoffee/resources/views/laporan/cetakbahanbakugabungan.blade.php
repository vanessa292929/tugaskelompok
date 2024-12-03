<!DOCTYPE html>
<html>
<head>
    <title>Laporan Analisis Pemakaian dan Pengadaan Bahan Baku</title>
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
</body>
</html>
