<?php

namespace App\Imports;

use App\Models\TKuesionerPerangkats;
use Maatwebsite\Excel\Concerns\ToModel;

class TKuesionerPerangkatsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TKuesionerPerangkats([
            //
        ]);
    }
}
