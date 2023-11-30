<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\TestimoniosController;
use App\Http\Controllers\UserController;
use App\Models\Testimonios;

Route::get('', [HomeController::class,'index'])->name('admin.index');

Route::get('/Restaurantes', [RestauranteController::class,'index'])->name('admin.indexRest');
Route::get('/restaurante/create',[RestauranteController::class,'create'])->name('Restaurante.create');
Route::post('/Restaurantes/agregar',[RestauranteController::class,'agregar'])->name('Restaurante.agregar');
Route::get('/Restaurantes/edit/{id}',[RestauranteController::class,'edit'])->name('Restaurante.edit');
Route::put('/Restaurantes/update/{id}',[RestauranteController::class,'update'])->name('Restaurante.update');
Route::delete('/Restaurantes/delete/{id}',[RestauranteController::class,'delete'])->name('Restaurante.delete');
Route::get('/Restaurantes/destroy/{id}',[RestauranteController::class,'destroy'])->name('Restaurante.destroy');
// Route::get('/restaurantes/{id}/productos',[RestauranteController::class,'productos'])->name('restaurantes.productos');
// Route::get('/restaurantes/{id}/categorias',[RestauranteController::class,'categorias'])->name('restaurantes.categorias');


Route::get('/Categorias', [CategoriasController::class,'index'])->name('admin.indexCat');
Route::get('/Categorias/create',[CategoriasController::class,'create'])->name('Categorias.create');
Route::post('/Categorias/agregar',[CategoriasController::class,'agregar'])->name('Categorias.agregar');
Route::get('/categorias/{id}/edit',[CategoriasController::class,'edit'])->name('Categorias.edit');
Route::put('/categorias/{id}',[CategoriasController::class,'update'] )->name('Categorias.update');
Route::get('/categorias/{id}/eliminar', [CategoriasController::class, 'showDeleteForm'])->name('Categorias.showDeleteForm');
Route::delete('/categorias/{id}', [CategoriasController::class, 'delete'])->name('Categorias.delete');

Route::get('/Productos', [ProductosController::class,'index'])->name('admin.indexProd');
Route::get('/Productos/create',[ProductosController::class,'create'])->name('Productos.create');
Route::post('/Productos/agregar',[ProductosController::class,'agregar'])->name('Productos.agregar');
Route::get('/producto/{id}/delete', [ProductosController::class, 'showDelete'])->name('Productos.showDelete');
Route::delete('/productos/{id}', [ProductosController::class, 'delete'])->name('Productos.delete');
Route::get('/productos/{id}/editar', [ProductosController::class, 'edit'])->name('Productos.edit');
Route::put('/products/{id}', [ProductosController::class, 'update'] )->name('Productos.update');


Route::get('/User', [UserController::class,'index'])->name('admin.indexUser');
Route::get('/create', [UserController::class,'create'])->name('admin.User.create');
Route::post('/User', [UserController::class,'agregar'])->name('admin.User.agregar');
Route::get('/User/{user}/edit', [UserController::class,'edit'])->name('admin.User.edit');
Route::put('/users/{user}',[UserController::class,'update'] )->name('admin.User.update');
Route::get('/admin/user/{user}/delete', [UserController::class, 'showDelete'])->name('admin.User.showDelete');
Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('admin.user.delete');


Route::get('/Horarios', [HorariosController::class,'index'])->name('admin.indexHorario');
Route::get('/horarios/{id}/edit', [HorariosController::class, 'edit'])->name('horarios.edit');
Route::put('/horarios/{id}', [HorariosController::class, 'update'])->name('horarios.update');


Route::get('/Testimonios', [TestimoniosController::class,'index'])->name('admin.indexTestimonios');


