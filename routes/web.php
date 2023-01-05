<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabunganController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect(route('index'));
});

Route::get('/index',[TabunganController::class, 'index'])->name('index');
Route::post('/store',[TabunganController::class, 'store'])->name('store');

Route::post('/destroyTabungan/{id}',[TabunganController::class, 'destroyTabungan'])->name('destroyTabungan');

Route::post('/tambahTabungan/{id}',[TabunganController::class, 'plusMoney'])->name('tambahTabungan');
Route::post('/kurangTabungan/{id}',[TabunganController::class, 'minMoney'])->name('kurangTabungan');






