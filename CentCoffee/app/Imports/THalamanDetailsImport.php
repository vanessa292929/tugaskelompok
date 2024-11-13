<?php

namespace App\Imports;

use App\Models\THalamanDetails;
use Maatwebsite\Excel\Concerns\ToModel;

class THalamanDetailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new THalamanDetails([
            //
        ]);
    }
}
