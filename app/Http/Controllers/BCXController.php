<?php

namespace App\Http\Controllers;

use App\Models\GeneralLedger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BcxesImport;
use App\Exports\BcxesExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BCXController extends Controller
{
    /**
     * //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileImportExport()
    {
        return view('upload');
    }

    /**
     * //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileImport(Request $request): RedirectResponse
    {
        Excel::import(new BcxesImport(), $request->file('file')->store('temp'));
        return back();
    }

    /**
     * //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileExport(): BinaryFileResponse
    {
        return Excel::download(new BcxesExport(), 'BCX-collection.xlsx');
    }

    public function getBCXData()
    {

//        $bcxes = b_c_x_e_s::get();
//        foreach ($bcxes as $bcx){
//            $general = GeneralLedger::where('trxDescription','LIKE','%'.$bcx->stan.'%')->get();
//        }
//        return view('history');
    }
}


