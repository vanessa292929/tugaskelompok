<?php

namespace App\Imports;

use App\Models\TPerangkats;
use Maatwebsite\Excel\Concerns\ToModel;

class TPerangkatsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TPerangkats([
            //
        ]);
    }
}
