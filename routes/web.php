<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Models\Department;
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


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
// });

// Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.detail');
    Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/delete', [UserController::class, 'delete'])->name('user.delete');


});
Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/create', [DepartmentController::class, 'create'])->name('department1.create');
    Route::get('/detail/{id}', [DepartmentController::class, 'detail'])->name('department.detail');
    Route::get('/edit', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::get('/delete', [DepartmentController::class, 'delete'])->name('department.delete');


});
