<?php

use App\Http\Controllers\ApiController;
use App\Models\Food;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AnotherApiController;

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

Route::get('/admin-add-user', function () {
    return view('admin/admin-add-user');
});

Route::get('/after-del', function () {
    return view('admin/admin-panel');
});
Route::get('/hello', function () {
    return view('hello');
});

Route::get('/food-panel', function () {
    return view('admin/food-panel');
});

// Route::get('/user-update-process', function () {
//     return view('admin/food-panel');
// });


Route::get('/add-food', function () {
    return view('admin/add-food');
});




Route::get('/controller', [User::class, 'showuser']);
Route::post('/user-register-process', [User::class, 'store'])->name('user-register-process');
Route::post('/admin-add-user-process', [User::class, 'store_admin'])->name('admin-add-user-process');

Route::post('/adminlogin', [User::class, 'store'])->name('adminlogin');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin_login');
Route::delete('users-destroy/{id}', [User::class, 'destroy'])->name('users-destroy');
Route::get('/detail-check', [HomeController::class, 'index'])->name('detail-check');
Route::get('/user-update/{id}', [HomeController::class, 'view'])->name('user-update');
Route::post('/userauth', [AuthController::class,'userlogin'])->name('userauth');
Route::get('/user-update-process/{id}', [User::class, 'update'])->name('user-update-process');

// Route::post('/user-update-process', [AuthController::class,''])->name('user-update-process');






//Food Routing
Route::get('/food-view', [FoodController::class, 'index'])->name('food-view');
Route::get('/food-create', [FoodController::class, 'create'])->name('food-create');
Route::post('/food-store', [FoodController::class, 'store'])->name('food-store');
// Route::get('/food-view', [FoodController::class, 'view'])->name('food-view');
Route::delete('/food-destroy/{id}', [FoodController::class, 'destroy'])->name('food.destroy');

Route::get('apiexample', [AnotherApiController::class,'index'])->name('apiexample');


