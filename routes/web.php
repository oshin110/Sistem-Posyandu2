<?php

use App\Models\anak;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenimbanganController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $anaks = anak::all();
    return view('index', compact('anaks'));
});

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::middleware(['auth'])->group(function () {
    Route::resource('anak', AnakController::class);
    Route::resource('ibu', IbuController::class);
    Route::resource('penimbangan', PenimbanganController::class);
    // Tambahkan rute untuk Penimbangan, Imunisasi, dan lainnya
// });

require __DIR__.'/auth.php';
