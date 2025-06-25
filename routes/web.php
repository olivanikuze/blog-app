<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('auth.register');
});

Route::resource('blogs', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 
Route::get('/', [ReaderController::class, 'index'])->name('viewers.index');
Route::get('/show/{id}', [ReaderController::class, 'show'])->name('viewers.show');
