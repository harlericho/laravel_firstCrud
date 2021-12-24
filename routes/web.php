<?php

use App\Http\Controllers\ProgrammingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProgrammingController::class, 'index'])->name('index');
Route::get('/create', [ProgrammingController::class, 'create'])->name('create');
Route::post('/store', [ProgrammingController::class, 'store'])->name('store');
Route::get('/edit/{programming}', [ProgrammingController::class, 'edit'])->name('edit');
Route::put('/update', [ProgrammingController::class, 'update'])->name('update');
Route::get('/show/{programming}', [ProgrammingController::class, 'show'])->name('show');
Route::delete('/destroy', [ProgrammingController::class, 'destroy'])->name('destroy');
