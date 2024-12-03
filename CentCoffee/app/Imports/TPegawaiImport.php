<?php

namespace App\Imports;

use App\Models\Tpegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPegawaiImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Gunakan updateOrCreate untuk menghindari duplikasi data
        Tpegawai::updateOrCreate(
            ['kode_pegawai' => $row['kode_pegawai']], // Kondisi unik berdasarkan kode_pegawai
            [
                'kata_sandi' => $row['kata_sandi'], // Kata sandi
                'nama_pegawai' => $row['nama_pegawai'], // Nama pegawai
                'jenis_kelamin_pegawai' => $row['jenis_kelamin_pegawai'], // Jenis kelamin
                'menu_terbanyak' => $row['menu_terbanyak'], // Menu terbanyak
            ]
        );

        // Kembalikan null untuk menghindari duplikasi di proses import
        return null;
    }
}
