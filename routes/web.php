<?php

use App\Models\anak;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\PenimbanganController;

Route::get('/', function () {
    $anaks = anak::paginate(10);
    return view('index', compact('anaks'));
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('anak', AnakController::class);
    Route::resource('ibu', IbuController::class);
    Route::resource('penimbangan', PenimbanganController::class);
    Route::resource('imunisasi', ImunisasiController::class);
});

require __DIR__.'/auth.php';
