<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

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
Route::get('apply',[PdfController::class,'downloadAttendance'])->name('attendance.download');
Route::get('register',[AlumniController::class,'create'])->name('alumni.create');
Route::get('update',[PdfController::class,'downloadAttendance'])->name('attendance.download');
Route::get('apply',[PdfController::class,'downloadAttendance'])->name('attendance.download');
Route::get('pay',[PdfController::class,'downloadAttendance'])->name('attendance.download');
Route::get('/', function () {
    return view('index');
});
