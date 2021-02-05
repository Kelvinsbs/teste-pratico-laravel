<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\indexController;
use App\Http\Controllers\produtoController;

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

Route::get('/produto', [ProdutoController::class, 'index']);
// Route::view('/produto', 'index');


Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::get('/produto/{produto}/edit', [ProdutoController::class, 'edit']);
Route::put('/produto/{produto}', [ProdutoController::class, 'update']);
Route::delete('/produto/{produto}', [ProdutoController::class, 'destroy']);
