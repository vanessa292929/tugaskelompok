<?php

namespace App\Imports;

use App\Models\TPesananDetails;
use Maatwebsite\Excel\Concerns\ToModel;

class TPesananDetailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPesananDetails([
            //
        ]);
    }
}
