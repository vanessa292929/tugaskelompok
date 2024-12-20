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
        tpesanan::updateOrCreate(
            ['kode_pesanan' => $row['kode_pesanan']], 
            [
                'nama_menu' => $row['nama_menu'], 
                'tanggal_pesanan' => Carbon::parse($row['tanggal_pesanan'])->format('Y-m-d'), 
                'waktu_pesanan' => $row['waktu_pesanan'], 
                'pembeli_pesanan' => $row['pembeli_pesanan'], 
                'catatan_pesanan' => $row['catatan_pesanan'], 
                'harga_pesanan' => $row['harga_pesanan'], 
                'tunai_pesananan' => $row['tunai_pesananan'] ?? 0, 
                'status_pesanan' => $row['status_pesanan'], 
                'kode_pegawai' => $row['kode_pegawai'], 
            ]
        );

        return null;
    }
}
