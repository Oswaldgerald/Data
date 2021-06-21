<?php

use App\Http\Controllers\GeneralLedgerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UploadGLController;
use App\Http\Controllers\BCXController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route:: get('/transactions', [TransactionController::class, 'show_transactions']);

Auth::routes();
Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('main');


Auth::routes();

Route::get('/upload', [UploadController::class, 'upload_data'])->name('upload');
Route::post('/uploadFile',  [UploadController::class, 'uploadFile']);

Route::get('/upload', [UploadGLController::class, 'upload_data'])->name('upload');
Route::post('/uploadFile',  [UploadGLController::class, 'uploadGLFile']);

Auth::routes();
Route::get('/history', [UploadController::class, 'show_history'])->name('history');

Auth::routes();
Route::get('/history', [UploadGLController::class, 'show_history'])->name('history');


Auth::routes();
Route::get('/file-import-export', [BCXController::class, 'BCX_fileImportExport'])->name('CL-BCX-file-import');
Route::post('/file-import-export', [BCXController::class, 'BCX_fileImport'])->name('BCX-file-import');
Route::get('/file-import', [BCXController::class, 'BCX_fileExport'])->name('BCX-file-export');

//Route::get('/file-import-export', [GeneralLedgerController::class, 'GLfileImportExport']);
Route::post('/file-import', [GeneralLedgerController::class, 'GLfileImport'])->name('GL-file-import');
Route::get('/file-export', [GeneralLedgerController::class, 'GLfileExport'])->name('GL-file-export');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');

Auth::routes();
Route::get('/file-import-export', [BCXController::class,'getBCXData'])->name('get-BCX');;

