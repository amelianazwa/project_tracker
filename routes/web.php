<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Models\bank;
use App\Models\pemasukan;
use App\Models\pengeluaran;

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

Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});




// Route::get('/', function () {
//     return view('welcome');
// });




// Route ::get('/', [FrontController::class, 'index']);
// bank
use App\Http\Controllers\BankController;
Route::resource('bank', BankController::class);

// pemasukan
use App\Http\Controllers\PemasukanController;
Route::resource('pemasukan', PemasukanController::class);

// pengeluaran
use App\Http\Controllers\PengeluaranController;
Route::resource('pengeluaran', PengeluaranController::class);

// Route ::get('/', [FrontController::class, 'index']);

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
