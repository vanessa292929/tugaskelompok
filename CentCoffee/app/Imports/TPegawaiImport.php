<?php

namespace App\Imports;

use App\Models\Tpegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPegawaiImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // updateOrCreate untuk menghindari duplikasi data
        Tpegawai::updateOrCreate(
            ['kode_pegawai' => $row['kode_pegawai']], 
            [
                'kata_sandi' => $row['kata_sandi'], 
                'nama_pegawai' => $row['nama_pegawai'], 
                'jenis_kelamin_pegawai' => $row['jenis_kelamin_pegawai'], 
                'menu_terbanyak' => $row['menu_terbanyak'], 
            ]
        );

        return null;
    }
}
