<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/marca', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/marca/{id}', [MarcaController::class, 'show'])->name('marcas.show');
