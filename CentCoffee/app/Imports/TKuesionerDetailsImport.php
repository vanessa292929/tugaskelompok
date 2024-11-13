<?php

namespace App\Imports;

use App\Models\TKuesionerDetails;
use Maatwebsite\Excel\Concerns\ToModel;

class TKuesionerDetailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TKuesionerDetails([
            //
        ]);
    }
}
