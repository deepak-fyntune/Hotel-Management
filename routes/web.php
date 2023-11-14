<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/admin-panel', function () {
    return view('admin/admin-panel');
});
Route::get('/user-panel', function () {
    return view('admin/user-detail');
});
Route::get('/admin-add-user', function () {
    return view('admin/admin-add-user');
});
Route::get('/controller', [User::class, 'showuser']);
Route::post('/user-register-process', [User::class, 'store'])->name('user-register-process');
Route::post('/admin-add-user-process', [User::class, 'store_admin'])->name('admin-add-user-process');

Route::post('/adminlogin', [User::class, 'store'])->name('adminlogin');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin_login');




