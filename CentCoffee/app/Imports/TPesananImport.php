<?php

namespace App\Imports;

use App\Models\TPesanan;
use Maatwebsite\Excel\Concerns\ToModel;

class TPesananImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPesanan([
            //
        ]);
    }
}
