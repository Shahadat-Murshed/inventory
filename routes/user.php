<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::resource('inventories', InventoryController::class);
Route::resource('items', ItemController::class);
