<?php

namespace App\Imports;


use App\Models\GeneralLedger;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class GLImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new GeneralLedger([
            'operator_id'=> $row[1],
            'trxDescription'=> $row[2],
            'debitAmount'=> $row[3],
            'creditAmount'=> $row[4],
            'closingBalance'=> $row[5],
            'sheet_no'=> $row[6],
        ]);
    }
}
