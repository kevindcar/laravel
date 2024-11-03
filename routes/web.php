<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\motoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [motoController::class, 'index'])->name('motos.index');
Route::get('/motos/{id}', [motoController::class, 'show'])->name('motos.show');
Route::get('/motos/create', [motoController::class, 'create'])->name('motos.create');
Route::post('/motos', [motoController::class, 'store'])->name('motos.store');

Route::get('/logout', function () {
    return view('logout'); // Muestra la vista de logout
})->name('logout.view');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
