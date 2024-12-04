<?php
namespace App\Imports;

use App\Models\TPengadaanBahanBaku;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPengadaanBahanBakuImport implements ToModel, WithHeadingRow
{
    /**
     * Import data ke model TPengadaanBahanBaku.
     *
     * @param array $row
     * @return void
     */
    public function model(array $row)
    {
        \Log::info('Row Data:', $row);

        TPengadaanBahanBaku::updateOrCreate(
            ['kode_pengadaan_bahan_baku' => $row['kode_pengadaan_bahan_baku']], 
            [
                'subjek_pengadaan_bahan_baku' => $row['subjek_pengadaan_bahan_baku'], 
                'tanggal_pengadaan_bahan_baku' => $row['tanggal_pengadaan_bahan_baku'], 
                'waktu_pengadaan_bahan_baku' => $row['waktu_pengadaan_bahan_baku'], 
                'catatan_pengadaan_bahan_baku' => $row['catatan_pengadaan_bahan_baku'], 
                'status_pengadaan_bahan_baku' => $row['status_pengadaan_bahan_baku'], 
                'jumlah_pengadaan' => $row['jumlah_pengadaan'], 
                'kode_pegawai' => $row['kode_pegawai'], 
                'kode_bahan_baku' => $row['kode_bahan_baku'], 
            ]
        );
        return null;
    }
}
