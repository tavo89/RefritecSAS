<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdenTallerController;

Route::get('/', function () {
    return redirect()->route('login');  // Redirige a la página de login welcome login
});

Route::view('dashboard', 'dashboard',[OrdenTallerController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
