<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

// Rute upload file
Route::post('/upload', [FileController::class, 'upload'])->middleware('apikey');

// Rute daftar file
Route::get('/files', [FileController::class, 'list'])->middleware('apikey');

// Rute update file
Route::post('/update/{id}', [FileController::class, 'update'])->middleware('apikey');

// Rute hapus file
Route::delete('/upload/{id}', [FileController::class, 'delete'])->middleware('apikey');
