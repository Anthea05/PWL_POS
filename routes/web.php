<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;     // Tambahkan ini
use App\Http\Controllers\KategoriController; // Tambahkan ini
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

