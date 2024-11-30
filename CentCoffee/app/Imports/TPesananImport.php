<?php

namespace App\Imports;

use App\Models\tpesanan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class TPesananImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new tpesanan([
            'kode_pesanan' => $row['kode_pesanan'],
            'nama_menu' => $row['nama_menu'], // Kolom nama menu
            'tanggal_pesanan' => Carbon::parse($row['tanggal_pesanan'])->format('Y-m-d'),
            'waktu_pesanan' => $row['waktu_pesanan'],
            'pembeli_pesanan' => $row['pembeli_pesanan'],
            'catatan_pesanan' => $row['catatan_pesanan'],
            'harga_pesanan' => $row['harga_pesanan'],
            'tunai_pesananan' => $row['tunai_pesananan'] ?? 0, // Default 0 jika tidak ada
            'status_pesanan' => $row['status_pesanan'],
            'kode_pegawai' => $row['kode_pegawai'],
        ]);
    }
}
