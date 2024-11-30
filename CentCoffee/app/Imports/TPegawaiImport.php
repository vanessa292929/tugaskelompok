<?php

namespace App\Imports;

use App\Models\tpegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPegawaiImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Cek apakah kode_pegawai sudah ada di database
        $existing = tpegawai::where('kode_pegawai', $row['kode_pegawai'])->first();
        if ($existing) {
            return null; // Abaikan data jika sudah ada
        }

        // Jika tidak ada, tambahkan data baru
        return new tpegawai([
            'kode_pegawai' => $row['kode_pegawai'],
            'kata_sandi' => $row['kata_sandi'],
            'nama_pegawai' => $row['nama_pegawai'],
            'jenis_kelamin_pegawai' => $row['jenis_kelamin_pegawai'],
        ]);
    }
}
