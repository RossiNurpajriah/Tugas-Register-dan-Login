<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rute untuk registrasi dan login
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang dilindungi oleh middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/products', function () {
        return view('products');
    })->name('products');

    // Rute yang hanya bisa diakses oleh superadmin
    Route::middleware('role:superadmin')->group(function () {
        Route::get('/manage_users', function () {
            $users = \App\Models\User::all();
            return view('manage_users', compact('users'));
        })->name('manage_users');
    });
});
