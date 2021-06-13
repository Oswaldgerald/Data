<?php

namespace App\Http\Controllers;

use App\Models\GeneralLedger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UploadGLController extends Controller
{
    public function upload_data()
    {

        return View('upload');
    }

    public function show_history()
    {

        return View('history');
    }

    public function uploadGLFile(Request $request): RedirectResponse
    {

        if ($request->input('submit') != null) {

            $file = $request->file('file');

            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if (in_array(strtolower($extension), $valid_extension)) {

                // Check file size
                if ($fileSize <= $maxFileSize) {

                    // File upload location
                    $location = '\uploads';

                    // Upload file
                    $file->move($location, $filename);

                    // Import CSV to Database
                    $filepath = public_path($location . "/" . $filename);

                    // Reading file
                    $file = fopen($filepath, "r");

                    $importData_arr = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 1000)) !== FALSE) {
                        $num = count($filedata);

                        // Skip first row (Remove below comment if you want to skip the first row)
                        /*if($i == 0){
                           $i++;
                           continue;
                        }*/
                        for ($c = 0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata [$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    // Insert to MySQL database
                    foreach ($importData_arr as $importData) {

                        $insertData = array(
                            "operator_id" => $importData[1],
                            "TrxDate" => $importData[2],
                            "TrxDescription" => $importData[3],
                            "debitAmount" => $importData[4],
                            "creditAmount" => $importData[5],
                            "closingBalance" => $importData[6],
                            "sheet_no" => $importData[7]);

                        GeneralLedger::insertData($insertData);

                    }

                    Session::flash('message', 'Import Successful.');
                } else {
                    Session::flash('message', 'File too large. File must be less than 2MB.');
                }

            } else {
                Session::flash('message', 'Invalid File Extension.');
            }

        }

        // Redirect to index
        return redirect()->action('UploadGLController');
    }

}
