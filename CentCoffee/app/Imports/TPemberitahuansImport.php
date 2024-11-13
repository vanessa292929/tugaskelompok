<?php

namespace App\Imports;

use App\Models\TPemberitahuans;
use Maatwebsite\Excel\Concerns\ToModel;

class TPemberitahuansImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPemberitahuans([
            //
        ]);
    }
}
