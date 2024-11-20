<?php

namespace App\Imports;

use App\Models\tpesanandetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPesananDetailsImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) { 
            return new tpesanandetail([
                'kode_pesanan_detail' => $row['kode_pesanan_detail'], 
                'kode_menu' => $row['kode_menu'],
                'kode_pesanan' => $row['kode_pesanan'],
                'jumlah_pesanan_detail' => $row['jumlah_pesanan_detail'],
                'status_pesanan_detail' => $row['status_pesanan_detail'],
            ]);
        } else {
            return null;
        }
    }
}
