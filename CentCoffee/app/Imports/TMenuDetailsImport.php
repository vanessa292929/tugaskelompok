<?php

namespace App\Imports;

use App\Models\TMenuDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TMenuDetailsImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;

        if ($this->rowcount > 1) {
            // updateOrCreate untuk menghindari duplikasi berdasarkan kode_menu_detail
            return TMenuDetail::updateOrCreate(
                ['kode_menu_detail' => $row['kode_menu_detail']], 
                [
                    'jumlah_bahan_baku_detail' => $row['jumlah_bahan_baku_detail'],
                    'kode_menu' => $row['kode_menu'],
                    'kode_bahan_baku' => $row['kode_bahan_baku'],
                    'menu_terjual' => $row['menu_terjual'], 
                ]
            );
        } else {
            return null;
        }
    }
}
