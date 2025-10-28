<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/turnamen', [PageController::class, 'turnamen']);
Route::get('/tim', [PageController::class, 'tim']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/news/{slug}', [PageController::class, 'showNews']);
