<?php

namespace App\Imports;

use App\Models\TPengadaanBahanBakuDetails;
use Maatwebsite\Excel\Concerns\ToModel;

class TPengadaanBahanBakuDetailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPengadaanBahanBakuDetails([
            //
        ]);
    }
}
