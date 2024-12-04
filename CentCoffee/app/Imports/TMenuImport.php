<?php

namespace App\Imports;

use App\Models\TMenu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TMenuImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        TMenu::updateOrCreate(
            ['kode_menu' => $row['kode_menu']], 
            [
                'nama_menu' => $row['nama_menu'],
                'jenis_menu' => $row['jenis_menu'],
                'harga_menu' => $row['harga_menu'],
                'deskripsi_menu' => $row['deskripsi_menu'],
                'gambar_menu' => $row['gambar_menu'],
                'kode_pegawai' => $row['kode_pegawai'],
            ]
        );
    }
}
