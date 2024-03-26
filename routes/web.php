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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('store');

Route::get('', [UserController::class, 'back'])->name('back');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/d1', [UserController::class, 'd1'])->name('d1'); 
Route::get('/d2', [UserController::class, 'd2'])->name('d2');


