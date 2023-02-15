<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/trips', function () {
//     return view('trips');
// });

Route::get('/home', HomeController::class);
Route::get('/seat/create', [SeatController::class, 'create']);
Route::post('/seat', [SeatController::class, 'store'])->name('seat.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::resource('trip', TripController::class);

Route::prefix('/trip')->group(function (){
    Route::get('/', [TripController::class, 'index'])->name('trip.index');
    Route::get('/account', [TripController::class, 'account'])->name('trip.account');
    //Route::get('/{id}', [TripController::class, 'show'])->name('trip.show');
    Route::get('/create', [TripController::class, 'create'])->name('trip.create');
    Route::post('/', [TripController::class, 'store'])->name('trip.store');
    Route::get('/edit/{id}', [TripController::class, 'edit'])->name('trip.edit');
    Route::patch('/{id}', [TripController::class, 'update'])->name('trip.update');
    Route::delete('/{id}', [TripController::class, 'destroy'])->name('trip.destroy');
});

Route::prefix('/reservation')->group(function (){
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/{id}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::patch('/{id}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
});

// Route::prefix('/van')->middleware(['auth', 'isAdmin'])->group(function (){
//     Route::get('/', [VanController::class, 'index'])->name('van.index');
//     Route::get('/{id}', [VanController::class, 'show'])->name('van.show');
//     Route::get('/create', [VanController::class, 'create'])->name('van.create');
//     Route::post('/', [VanController::class, 'store'])->name('van.store');
//     Route::get('/edit/{id}', [VanController::class, 'edit'])->name('van.edit');
//     Route::patch('/{id}', [VanController::class, 'update'])->name('van.update');
//     Route::delete('/{id}', [VanController::class, 'destroy'])->name('van.destroy');
// });

Route::prefix('/route')->group(function (){
    Route::get('/', [RoutesController::class, 'index'])->name('route.index');
    //Route::get('/{id}', [RoutesController::class, 'show'])->name('route.show');
    Route::get('/create', [RoutesController::class, 'create'])->name('route.create');
    Route::post('/', [RoutesController::class, 'store'])->name('route.store');
    Route::get('/edit/{id}', [RoutesController::class, 'edit'])->name('route.edit');
    Route::patch('/{id}', [RoutesController::class, 'update'])->name('route.update');
    Route::delete('/{id}', [RoutesController::class, 'destroy'])->name('route.destroy');
});

//payments and finances

Route::fallback(FallbackController::class);

Auth::routes();