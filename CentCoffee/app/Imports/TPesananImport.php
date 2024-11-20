<?php

namespace App\Imports;

use App\Models\tpesanan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPesananImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) { 
            return new tpesanan([
                'kode_pesanan' => $row['kode_pesanan'], 
                'tanggal_pesanan' => $row['tanggal_pesanan'],
                'waktu_pesanan' => $row['waktu_pesanan'],
                'pembeli_pesanan' => $row['pembeli_pesanan'],
                'catatan_pesanan' => $row['catatan_pesanan'],
                'harga_pesanan' => $row['harga_pesanan'],
                'tunai_pesananan' => $row['tunai_pesananan'],
                'status_pesanan' => $row['status_pesanan'],
                'kode_pegawai' => $row['kode_pegawai'],
                'kode_perangkat' => $row['kode_perangkat'],
            ]);
        } else {
            return null;
        }
    }
}
