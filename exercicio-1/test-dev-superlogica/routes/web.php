<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/index', [UsersController::class, 'index'])->name('users_list');

Route::get('/users/registration', [UsersController::class, 'registration'])->name('user_register');

Route::post('/users/registration', [UsersController::class, 'store'])->name('register_user');
Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('show_user');

Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('edit_user');
Route::put('/users/edit/{id}', [UsersController::class, 'update'])->name('update_user');

Route::get('/users/delete/{id}', [UsersController::class, 'delete'])->name('user_delete');
Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('delete_user');
