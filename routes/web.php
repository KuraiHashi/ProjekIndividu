<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapresController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/mapres/{id}', [DashboardController::class, 'update'])->name('MapresUpdate');
    Route::delete('/mapres/{id}', [DashboardController::class, 'delete'])->name('MapresDelete');
});

require __DIR__ . '/auth.php';



// Mapres
Route::get('/', [MapresController::class, 'index'])->name('Mapres');


// Form
Route::get('/form-pendataan-mapres', [MapresController::class, 'create'])->name('FormMapres');
Route::post('/form-pendataan-mapres', [MapresController::class, 'store'])->name('FormMapresPost');
