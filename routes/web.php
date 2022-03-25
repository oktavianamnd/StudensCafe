<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\LaporanController;

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

route::get('/redirects',[HomeController::class,"index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('admin', AdminController::class);
Route::resource('kasir', KasirController::class);
Route::resource('manajer', ManajerController::class);
Route::resource('laporan', LaporanController::class);

Route::get('manajer.onlinepdf', [LaporanController::class,"onlinepdf"]);
Route::post('store', [KasirController::class,'store'])->name('store');


require __DIR__.'/auth.php';
