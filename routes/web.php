<?php

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

Route::post(
    '/users',
    [\App\Http\Controllers\UserController::class, 'saveReport']
);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('/clientes',
        \App\Http\Controllers\ClienteController::class);

    Route::resource('/mascotas',
        \App\Http\Controllers\MascotaController::class);

    Route::resource('/citas',
        \App\Http\Controllers\CitaController::class);

});
