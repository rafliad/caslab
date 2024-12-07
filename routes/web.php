<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
})->name('home');

use App\Http\Controllers\TpController;

Route::get('/tp', [TpController::class, 'index'])->name('tp.index');
Route::get('/tp/create', [TpController::class, 'create'])->name('tp.create');
Route::post('/tp', [TpController::class, 'store'])->name('tp.store');
Route::get('/tp/{id}/edit', [TpController::class, 'edit'])->name('tp.edit');
Route::put('/tp/{id}', [TpController::class, 'update'])->name('tp.update');
Route::delete('/tp/{id}', [TpController::class, 'destroy'])->name('tp.destroy');