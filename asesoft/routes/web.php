<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asesoresController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AsesoresController::class)->group(function () {
Route::get('asesores', 'index')->name('asesores.index');
Route::get('asesores/create', 'create')->name('asesores.create');
Route::post('asesores', 'Fcreate')->name('asesores.Fcreate');
Route::get('asesores/{id}', 'show')->name('asesores.show');
Route::get('asesores/{id}/edit', 'edit')->name('asesores.edit');
Route::put('asesores/{id}', 'update')->name('asesores.update');
route::delete('asesores/{id}', 'destroy')->name('asesores.destroy');
});
