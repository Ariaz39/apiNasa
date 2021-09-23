<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', [ApiController::class, 'index']);
//Route::get('/', [ApiController::class, 'json']);
Route::get('/apiNasa', [ApiController::class, 'consumirApi'])->name('apiNasa');
//Route::get('/apiJson', [ApiController::class, 'consumirJson'])->name('apiJson');