<?php
namespace App\Imports;

use App\Models\TBahanBaku;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TBahanBakuImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) {
            return new TBahanBaku([
                'kode_bahan_baku' => $row['kode_bahan_baku'], // Sesuaikan dengan kolom di Excel
                'nama_bahan_baku' => $row['nama_bahan_baku'],
                'stok_bahan_baku' => $row['stok_bahan_baku'],
                'satuan_bahan_baku' => $row['satuan_bahan_baku'],
                'tanggal_kadaluarsa_bahan_baku' => $row['tanggal_kadaluarsa_bahan_baku'],
            ]);
        } else {
            return null;
        }
    }
}
