<?php
namespace App\Imports;

use App\Models\TMenu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TMenuImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) {
            return new TMenu([
                'kode_menu' => $row['kode_menu'], // Sesuaikan dengan kolom di Excel
                'nama_menu' => $row['nama_menu'],
                'jenis_menu' => $row['jenis_menu'],
                'harga_menu' => $row['harga_menu'],
                'deskripsi_menu' => $row['deskripsi_menu'],
                'gambar_menu' => $row['gambar_menu'],
                'kode_pegawai' => $row['kode_pegawai'],
            ]);
        } else {
            return null;
        }
    }
}
