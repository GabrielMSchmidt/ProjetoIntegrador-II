<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ProdutoController,
    FornecedorController
};
// use App\Http\Controllers\ProdutoController;
// use App\Http\Controllers\FornecedorController;

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
Route::get('/register', [UserController::class, 'register'])-> name('register'); 
Route::post('/dashboard', [UserController::class, 'create'])-> name('user.create');
Route::post('/login', [UserController::class, 'store'])-> name('user.store');


Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])-> name('produto.destroy');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])-> name('produto.update');
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])-> name('produto.edit');
Route::get('/produtos', [ProdutoController::class, 'index'])-> name('produto.index');
Route::get('/novoProduto', [ProdutoController::class, 'create'])-> name('produto.create');
Route::post('/produtos', [ProdutoController::class, 'store'])-> name('produto.store');
Route::get('/produto/{id}',[ProdutoController::class, 'show'])-> name('produto.show');


Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy'])-> name('fornecedor.destroy');
Route::put('/fornecedores/{id}', [FornecedorController::class, 'update'])-> name('fornecedor.update');
Route::get('/fornecedores/{id}/edit', [FornecedorController::class, 'edit'])-> name('fornecedor.edit');
Route::get('/fornecedores', [FornecedorController::class, 'index'])-> name('fornecedor.index');
Route::get('/novoFornecedor', [FornecedorController::class, 'create'])-> name('fornecedor.create');
Route::post('/fornecedores', [FornecedorController::class, 'store'])-> name('fornecedor.store');
Route::get('/fornecedores/{id}',[FornecedorController::class, 'show'])-> name('fornecedor.show');
// Route::get('/fornecedoresTeste', [FornecedorController::class, 'teste'])-> name('fornecedor.teste');

