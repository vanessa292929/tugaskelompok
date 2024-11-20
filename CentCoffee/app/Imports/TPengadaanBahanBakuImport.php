<?php
namespace App\Imports;

use App\Models\TPengadaanBahanBaku;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPengadaanBahanBakuImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) {
            return new TPengadaanBahanBaku([
                'kode_pengadaan_bahan_baku' => $row['kode_pengadaan_bahan_baku'], 
                'subjek_pengadaan_bahan_baku' => $row['subjek_pengadaan_bahan_baku'],
                'tanggal_pengadaan_bahan_baku' => $row['tanggal_pengadaan_bahan_baku'],
                'waktu_pengadaan_bahan_baku' => $row['waktu_pengadaan_bahan_baku'],
                'catatan_pengadaan_bahan_baku' => $row['catatan_pengadaan_bahan_baku'],
                'status_pengadaan_bahan_baku' => $row['status_pengadaan_bahan_baku'],
                'kode_prioritas' => $row['kode_prioritas'],
                'kode_pegawai' => $row['kode_pegawai'],
            ]);
        } else {
            return null;
        }
    }
}
