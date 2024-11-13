<?php

namespace App\Imports;

use App\Models\TPrioritas;
use Maatwebsite\Excel\Concerns\ToModel;

class TPrioritasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPrioritas([
            //
        ]);
    }
}
