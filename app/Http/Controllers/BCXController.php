<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BcxesImport;
use App\Exports\BcxesExport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BCXController extends Controller
{
    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileImportExport()
    {
        return view('upload');
    }

    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileImport(Request $request): RedirectResponse
    {
        Excel::import(new BcxesImport(), $request->file('file')->store('temp'));
        return back();
    }

    /**
    //     * @return \Illuminate\Support\Collection
     */
    public function BCX_fileExport(): BinaryFileResponse
    {
        return Excel::download(new BcxesExport(), 'BCX-collection.xlsx');
    }
}
