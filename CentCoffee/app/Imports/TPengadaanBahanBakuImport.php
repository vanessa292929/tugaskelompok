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
        // Gunakan updateOrCreate untuk menghindari duplikasi
        TPengadaanBahanBaku::updateOrCreate(
            ['kode_pengadaan_bahan_baku' => $row['kode_pengadaan_bahan_baku']], // Kondisi unik berdasarkan kode_pengadaan_bahan_baku
            [
                'subjek_pengadaan_bahan_baku' => $row['subjek_pengadaan_bahan_baku'], // Subjek pengadaan
                'tanggal_pengadaan_bahan_baku' => $row['tanggal_pengadaan_bahan_baku'], // Tanggal pengadaan
                'waktu_pengadaan_bahan_baku' => $row['waktu_pengadaan_bahan_baku'], // Waktu pengadaan
                'catatan_pengadaan_bahan_baku' => $row['catatan_pengadaan_bahan_baku'], // Catatan
                'status_pengadaan_bahan_baku' => $row['status_pengadaan_bahan_baku'], // Status pengadaan
                'jumlah_pengadaan' => $row['jumlah_pengadaan'], // Jumlah pengadaan
                'kode_pegawai' => $row['kode_pegawai'], // Kode pegawai
                'kode_bahan_baku' => $row['kode_bahan_baku'], // Kode bahan baku
            ]
        );

        // Return null karena `updateOrCreate` sudah menangani data
        return null;
    }
}
