<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VanController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('trip', TripController::class);

Route::prefix('/reservation')->group(function (){
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/{id}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::patch('/{id}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
});

Route::prefix('/van')->group(function (){
    Route::get('/', [VanController::class, 'index'])->name('van.index');
    Route::get('/{id}', [VanController::class, 'show'])->name('van.show');
    Route::get('/create', [VanController::class, 'create'])->name('van.create');
    Route::post('/', [VanController::class, 'store'])->name('van.store');
    Route::get('/edit/{id}', [VanController::class, 'edit'])->name('van.edit');
    Route::patch('/{id}', [VanController::class, 'update'])->name('van.update');
    Route::delete('/{id}', [VanController::class, 'destroy'])->name('van.destroy');
});

Route::fallback(FallbackController::class);


