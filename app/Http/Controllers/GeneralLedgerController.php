<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GLImport;
use App\Exports\GLExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class GeneralLedgerController extends Controller
{
    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function GLfileImportExport()
    {
        return view('upload');
    }

    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function GLfileImport(Request $request): RedirectResponse
    {
        Excel::import(new GLImport(), $request->file('file')->store('temp'));
        return back();
    }

    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function GLfileExport(): BinaryFileResponse
    {
        return Excel::download(new GLExport(), 'GL-collection.xlsx');
    }
}
