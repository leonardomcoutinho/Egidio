<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\UserController;
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

// ROUTE USERS
Route::get('/', [UserController::class, 'index'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');


Route::middleware(['admin_master'])->group(function(){
    //USUARIOS
    Route::get('/users', [UserController::class, 'users'])->name('users')->middleware('auth');
    Route::get('/user/create', [UserController::class, 'create'])->name('create_user')->middleware('auth');
    Route::post('/user/store', [UserController::class, 'store'])->name('store_user')->middleware('auth');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit_user')->middleware('auth');
    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('update_user')->middleware('auth');
    Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('delete_user')->middleware('auth');

    //CLIENTES
    Route::get('/clients', [ClientsController::class, 'clients'])->name('clients')->middleware('auth');
    Route::get('/clients/create', [ClientsController::class, 'create'])->name('create_client')->middleware('auth');
    Route::post('/clients/create', [ClientsController::class, 'store'])->name('store_client')->middleware('auth');
    Route::get('/clients/edit/{id}', [ClientsController::class, 'edit'])->name('edit_client')->middleware('auth');
    Route::put('/clients/edit/{id}', [ClientsController::class, 'update'])->name('update_client')->middleware('auth');
    Route::delete('/clients/delete/{id}', [ClientsController::class, 'delete'])->name('delete_client')->middleware('auth');

    Route::get('/config', [ConfigController::class, 'config'])->name('config')->middleware('auth');
});
