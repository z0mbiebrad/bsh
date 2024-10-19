<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\THCAFlowerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/thca-menu', [THCAFlowerController::class, 'index'])->name('strain.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/create-strain', [THCAFlowerController::class, 'store'])->name('strain.store');
    Route::delete('/delete-strain/{flower}', [THCAFlowerController::class, 'destroy'])->name('strain.destroy');
    Route::get('/edit-strain/{flower}', [THCAFlowerController::class, 'edit'])->name('strain.edit');
    Route::put('/update-strain/{flower}', [THCAFlowerController::class, 'update'])->name('strain.update');
});

require __DIR__ . '/auth.php';
