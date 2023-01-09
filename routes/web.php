<?php

use App\Http\Controllers\API\V1\ListOfVpnController;
use App\Http\Controllers\API\V1\VpnsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/list', [ListOfVpnController::class, 'index'])->name('listOfVpns.index');

Route::get('/vpns/{user}' , [VpnsController::class, 'show'])->name('vpns.show');
Route::get('/vpns/rent/{user_id}/{vpn_id}' , [VpnsController::class, 'rent']);
