<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;

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
Route::get('/dashboard', [UserController::class, 'dashboard'])-> name('dashboard');
Route::get('/', [UserController::class, 'login'])-> name('login');
Route::get('/produtos', [ProdutoController::class, 'show'])-> name('produto.show');
Route::get('/novoProduto', [ProdutoController::class, 'showNP'])-> name('produto.showNP');
Route::get('/fornecedores', [FornecedorController::class, 'show'])-> name('fornecedor.show');

Route::post('/login', [UserController::class, 'store'])-> name('userStore');
