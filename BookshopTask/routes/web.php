<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/singlebook', [HomeController::class, 'singlebook'])->name('singlebook');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin-view', [HomeController::class, 'adminview'])->name('adminview');
    Route::get('/addnewbook', [HomeController::class, 'addnewbook'])->name('addnewbook');
    Route::get('/accountinfo', [HomeController::class, 'accountinfo'])->name('accountinfo');
});

Auth::routes();

