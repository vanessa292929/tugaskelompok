<?php
namespace App\Imports;

use App\Models\Totoritas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TotoritasImport implements ToModel, WithHeadingRow
{
    protected $rowcount = 0;

    public function model(array $row)
    {
        $this->rowcount++;
        if ($this->rowcount > 1) {
            return new Totoritas([
                'kode_otoritas' => $row['kode_otoritas'], // Sesuaikan dengan kolom di Excel
                'nama_otoritas' => $row['nama_otoritas'],
            ]);
        } else {
            return null;
        }
    }
}
