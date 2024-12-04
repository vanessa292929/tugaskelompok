<?php

namespace App\Imports;

use App\Models\Tpesanandetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TPesananDetailsImport implements ToModel, WithHeadingRow
{
    /**
     * Import data ke model Tpesanandetail.
     *
     * @param array $row
     * @return void
     */
    public function model(array $row)
    {
        // Validasi data
        if (empty($row['kode_pesanan_detail']) || empty($row['kode_menu']) || empty($row['kode_pesanan'])) {
            // Mengabaikan baris yang tidak lengkap
            return null;
        }

        try {
            Tpesanandetail::updateOrCreate(
                ['kode_pesanan_detail' => $row['kode_pesanan_detail']], 
                [
                    'kode_menu' => $row['kode_menu'], 
                    'kode_pesanan' => $row['kode_pesanan'], 
                    'jumlah_pesanan_detail' => $row['jumlah_pesanan_detail'], 
                    'status_pesanan_detail' => $row['status_pesanan_detail'], 
                    'total_harga' => $row['total_harga'], 
                ]
            );
        } catch (\Exception $e) {
            // Tangani error jika ada
            Log::error("Error importing row: " . $e->getMessage());
            return null;
        }

        return null;
    }
}
