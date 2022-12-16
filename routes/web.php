<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\LoginController;
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

// Auth::routes();
Route::post('books/search', [BooksController::class, 'searchs'])->name('books.search');
route::resource('books', BooksController::class);
Route::post('users/search', [UsersController::class, 'searchs'])->name('users.search');
route::resource('users', UsersController::class);
// Route::post('dashboard/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
route::resource('dashboard', DashboardController::class);
Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions.index');
// Auth::routes();
Route::get('/', function () {
    return redirect()->route('dashboard.index');
});
// Route::get('/search', [BooksController::class, 'search'])->name('books.search');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Route::get('register', [UserController::class, 'register'])->name('register');
// Route::post('register', [UserController::class, 'register_action'])->name('register.action');
// Route::get('login', [UserController::class, 'login'])->name('login');
// Route::post('login', [UserController::class, 'login_action'])->name('login.action');
// Route::get('password', [UserController::class, 'password'])->name('password');
// Route::post('password', [UserController::class, 'password_action'])->name('password.action');
// Route::get('logout', [UsersController::class, 'logout']);
