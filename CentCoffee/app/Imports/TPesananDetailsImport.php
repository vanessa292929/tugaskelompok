<?php

namespace App\Imports;

use App\Models\Tpesanandetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log; 

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
        Log::info('Importing row data: ', $row);

        if (empty($row['kode_pesanan_detail']) || empty($row['kode_menu']) || empty($row['kode_pesanan'])) {
            Log::warning('Skipping incomplete row: ', $row);
            return null;
        }

        $jumlahPesanan = is_numeric($row['jumlah_pesanan_detail']) ? $row['jumlah_pesanan_detail'] : 0;
        $statusPesanan = in_array($row['status_pesanan_detail'], ['Pending', 'Delivered']) ? $row['status_pesanan_detail'] : 'Pending';
        
       
        Tpesanandetail::updateOrCreate(
            ['kode_pesanan_detail' => $row['kode_pesanan_detail']], 
            [
                'kode_menu' => $row['kode_menu'], 
                'kode_pesanan' => $row['kode_pesanan'], 
                'jumlah_pesanan_detail' => $jumlahPesanan, 
                'status_pesanan_detail' => $statusPesanan, 
                'total_harga' => $row['total_harga'], 
            ]
        );

        return null;
    }
}
