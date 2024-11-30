<!DOCTYPE html>
<html>
<head>
    <title>Laporan Menu</title>
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
    <h1>Laporan Menu</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Jenis Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Kode Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                <tr>
                    <td>{{ $menu->kode_menu }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ $menu->jenis_menu == 'F' ? 'Food' : 'Drink' }}</td>
                    <td>{{ number_format($menu->harga_menu, 2, ',', '.') }}</td>
                    <td>{{ $menu->deskripsi_menu }}</td>
                    <td>{{ $menu->kode_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
