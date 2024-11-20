<?php

namespace App\Imports;

use App\Models\tpegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPegawaiImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) { 
            return new tpegawai([
                'kode_pegawai' => $row['kode_pegawai'], 
                'kata_sandi' => $row['kata_sandi'],
                'nama_pegawai' => $row['nama_pegawai'],
                'jenis_kelamin_pegawai' => $row['jenis_kelamin_pegawai'],
                'kode_otoritas' => $row['kode_otoritas'],
            ]);
        } else {
            return null;
        }
    }
}
