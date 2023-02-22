<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'ShipmentController@index');
Route::get('/', [ShipmentController::class,'index']);


// Shipment routes
Route::get('/shipments/create', [ShipmentController::class, 'create'])->name('shipments.create');
//Route::get('/shipments/{id}', 'ShipmentController@show');
Route::get('/shipments/{id}', [ShipmentController::class, 'show'])->name('shipments.show');
Route::get('/shipments/{id}/edit', [ShipmentController::class, 'edit'])->name('shipments.edit');
Route::delete('/shipments/{id}', [ShipmentController::class, 'destroy'])->name('shipments.destroy');
Route::get('/shipments', [ShipmentController::class, 'index'])->name('shipments.index');
Route::post('/shipments', [ShipmentController::class, 'store'])->name('shipments.store');
Route::put('/shipments/{id}', [ShipmentController::class, 'update'])->name('shipments.update');

//
//// User routes
//Route::get('/utilizatori', 'UtilizatorController@index');
//Route::get('/utilizatori/{id}', 'UtilizatorController@show');
//Route::post('/utilizatori', 'UtilizatorController@store');
//Route::put('/utilizatori/{id}', 'UtilizatorController@update');
//Route::delete('/utilizatori/{id}', 'UtilizatorController@destroy');
