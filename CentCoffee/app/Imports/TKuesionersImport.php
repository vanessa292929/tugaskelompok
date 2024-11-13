<?php

namespace App\Imports;

use App\Models\TKuesioners;
use Maatwebsite\Excel\Concerns\ToModel;

class TKuesionersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TKuesioners([
            //
        ]);
    }
}
