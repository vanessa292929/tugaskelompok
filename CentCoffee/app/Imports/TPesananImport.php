<?php

namespace App\Imports;

use App\Models\tpesanan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class TPesananImport implements ToModel, WithHeadingRow
{
    /**
     * Import data ke model tpesanan.
     *
     * @param array $row
     * @return void
     */
    public function model(array $row)
    {
        // Gunakan updateOrCreate untuk menghindari duplikasi data
        tpesanan::updateOrCreate(
            ['kode_pesanan' => $row['kode_pesanan']], // Kondisi unik berdasarkan kode_pesanan
            [
                'nama_menu' => $row['nama_menu'], // Nama menu
                'tanggal_pesanan' => Carbon::parse($row['tanggal_pesanan'])->format('Y-m-d'), // Tanggal pesanan
                'waktu_pesanan' => $row['waktu_pesanan'], // Waktu pesanan
                'pembeli_pesanan' => $row['pembeli_pesanan'], // Nama pembeli
                'catatan_pesanan' => $row['catatan_pesanan'], // Catatan
                'harga_pesanan' => $row['harga_pesanan'], // Harga pesanan
                'tunai_pesananan' => $row['tunai_pesananan'] ?? 0, // Uang tunai (default 0 jika null)
                'status_pesanan' => $row['status_pesanan'], // Status pesanan
                'kode_pegawai' => $row['kode_pegawai'], // Kode pegawai
            ]
        );

        return null;
    }
}
