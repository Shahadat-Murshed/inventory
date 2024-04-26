<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $route = Auth::user()->role . '.dashboard';
    return redirect()->route($route);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile/picture', [ProfileController::class, 'updateImage'])->name('profile.picture');
    Route::post('profile/password/update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});
require __DIR__ . '/auth.php';
