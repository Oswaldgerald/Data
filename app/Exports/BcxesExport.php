<?php

namespace App\Exports;

use App\Models\BCX;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class BcxesExport implements FromCollection
{
    /**
     * @return Collection
     */
    public function collection(): Collection
    {
        return BCX::all();
    }
}
