<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.home');
})->name("home");

Route::get('/about', function () {
    return view('dashboard.about');
})->name("about");

Route::get('/service', function () {
    return view('dashboard.service');
})->name("service");

Route::get('/book', function () {
    return view('dashboard.book');
})->name("book");

Route::get('/register', function () {
    return view('dashboard.register');
})->name("register");

Route::get('/login', function () {
    return view('dashboard.login');
})->name("login");

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/user/index', [UserController::class,'index'])->name('user.index');

Route::get('/booking/create', [BookingController::class, 'create'])->middleware('auth')->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin/index', [AdminController::class,'index'])->name("admin.index");
        Route::get('/admin/{id}', [AdminController::class,'show'])->name("admin.show");
        Route::get('/admin/edit/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::post('/admin/update/{admin}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name("admin.destroy");

        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});
