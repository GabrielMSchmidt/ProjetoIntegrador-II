<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::post('/login', [UserController::class, 'store'])-> name('userStore');
Route::get('/produtos', [UserController::class, 'produtosOverview'])-> name('produtosOverview');
Route::get('/fornecedores', [UserController::class, 'fornecedoresOverview'])-> name('fornecedoresOverview');

// Route::get('/', function () {
//     return view('login');
// });
