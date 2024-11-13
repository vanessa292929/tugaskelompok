<?php

namespace App\Imports;

use App\Models\TPegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class TPegawaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPegawai([
            //
        ]);
    }
}
