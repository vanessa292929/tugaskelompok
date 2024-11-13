<?php

namespace App\Imports;

use App\Models\THalamans;
use Maatwebsite\Excel\Concerns\ToModel;

class THalamansImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new THalamans([
            //
        ]);
    }
}
