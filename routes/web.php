<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SalesController;
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

//Rutas CRUD MOVIES
Route::get('/movies_index', [MoviesController::class,'index'])->name('movies.index');
Route::get('/movies_create', [MoviesController::class,'create'])->name('movies.create');
Route::get('/movies_edit/{id}', [MoviesController::class,'edit'])->name('movies.edit');
Route::get('/movies_show/{id}', [MoviesController::class,'show'])->name('movies.show');
Route::post('/movies_store', [MoviesController::class,'store'])->name('movies.store');
Route::put('/movies_update/{id}', [MoviesController::class,'update'])->name('movies.update');
Route::delete('/movies_destroy/{id}', [MoviesController::class,'destroy'])->name('movies.destroy');

//Rutas CRUD ROOMS
Route::get('/rooms_index', [RoomsController::class,'index'])->name('rooms.index');
Route::get('/rooms_create', [RoomsController::class,'create'])->name('rooms.create');
Route::get('/rooms_edit/{id}', [RoomsController::class,'edit'])->name('rooms.edit');
Route::get('/rooms_show/{id}', [RoomsController::class,'show'])->name('rooms.show');
Route::post('/rooms_store', [RoomsController::class,'store'])->name('rooms.store');
Route::put('/rooms_update/{id}', [RoomsController::class,'update'])->name('rooms.update');
Route::delete('/rooms_destroy/{id}', [RoomsController::class,'destroy'])->name('rooms.destroy');

//Rutas CRUD SALES
Route::get('/sales_index', [SalesController::class,'index'])->name('sales.index');
Route::get('/sales_create', [SalesController::class,'create'])->name('sales.create');
Route::get('/sales_edit/{id}', [SalesController::class,'edit'])->name('sales.edit');
Route::get('/sales_show/{id}', [SalesController::class,'show'])->name('sales.show');
Route::post('/sales_store', [SalesController::class,'store'])->name('sales.store');
Route::put('/sales_update/{id}', [SalesController::class,'update'])->name('sales.update');
Route::delete('/sales_destroy/{id}', [SalesController::class,'destroy'])->name('sales.destroy');