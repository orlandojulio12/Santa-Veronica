<?php

use App\Livewire\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RestauranteController;

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

Route::get('/', [RestauranteController::class,'Home'])->name('home');



Route::get('/Restaurantes/{idRestaurante}',[RestauranteController::class,'Restaurante1'])->name('resta1');
Route::get('/Menu/{idRestaurante}',[RestauranteController::class,'Menu'])->name('Menu');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
 
    Route::get('/admin', function () {
        return view('Admin.index');
    })->name('dashboard');
});
