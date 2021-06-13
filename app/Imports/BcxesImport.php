<?php

namespace App\Imports;

use App\Models\BCX;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class BcxesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Model|null
     */
    public function model(array $row)
    {
        return new BCX([
            'stan' => $row[0],
            'Card_no' => $row[1],
            'Terminal_id' => $row[2],
            'Amount' => $row[3],
            'Charge' => $row[4],
            'Account_no' => $row[5],
            'rrn' => $row[6],
            'status' => $row[7],
            'sheet_no' => $row[8],

        ]);
    }
}
