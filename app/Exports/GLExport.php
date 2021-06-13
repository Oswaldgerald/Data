<?php

namespace App\Exports;

use App\models\GeneralLedger;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class GLExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection(): Collection
    {
        return GeneralLedger::all();
    }
}
