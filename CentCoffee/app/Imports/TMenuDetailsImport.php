<?php

namespace App\Imports;

use App\Models\tmenudetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TMenuDetailsImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;

        // Lewati baris pertama (header)
        if ($this->rowcount > 1) {
            // Mengembalikan instance model tmenudetail dengan data yang diimpor
            return new tmenudetail([
                'kode_menu_detail' => $row['kode_menu_detail'],
                'jumlah_bahan_baku_detail' => $row['jumlah_bahan_baku_detail'],
                'kode_menu' => $row['kode_menu'],
                'kode_bahan_baku' => $row['kode_bahan_baku'],
                'menu_terjual' => $row['menu_terjual'], // Menambahkan field menu_terjual
            ]);
        } else {
            return null;
        }
    }
}
