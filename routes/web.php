<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('home');
//});
//Auth::logout();
//Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\User\LoginController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\User\LoginController::class, 'attemptLogin'])->name('attemptLogin');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::prefix('/user')->group(function () {
    Route::get('/', [\App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
    Route::get('/create', [\App\Http\Controllers\User\UserController::class, 'createUser'])->name('user.create');
    Route::post('/store', [\App\Http\Controllers\User\UserController::class, 'storeUser'])->name('user.store');
    Route::get('/edit/{id}', [\App\Http\Controllers\User\UserController::class, 'editUser'])->name('user.edit');
    Route::post('/update/{id}', [\App\Http\Controllers\User\UserController::class, 'updateUser'])->name('user.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\User\UserController::class, 'deleteUser'])->name('user.delete');
});
