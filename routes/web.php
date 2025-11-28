<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



// Redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman login (kalau pake Breeze/Jetstream otomatis ada)
Route::get('/login', function () {
    return view('login');
})->name('login');

// ===========================
// Admin Routes
// ===========================
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ===========================
// User Routes (Butuh Login)
// ===========================
Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Product CRUD
    Route::resource('products', ProductController::class);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Auth scaffolding (Breeze/Jetstream)
require __DIR__ . '/auth.php';
