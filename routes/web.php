<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

// Tambahkan route logout
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Hapus route logout karena sekarang ditangani oleh komponen Livewire Dashboard
