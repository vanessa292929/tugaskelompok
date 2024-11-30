<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pegawai</title>
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
    <h1>Laporan Pegawai</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Kata Sandi</th>
                <th>Nama Pegawai</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pegawai)
                <tr>
                    <td>{{ $pegawai->kode_pegawai }}</td>
                    <td>{{ $pegawai->kata_sandi }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->jenis_kelamin_pegawai == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
