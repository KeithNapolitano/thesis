<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommuterController;
use App\Models\Reservation;
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

//FOR COMMUTER
Route::middleware('auth')->group(function(){
    Route::get('/commuter', '\App\Http\Controllers\CommuterController@getRoutes');
    Route::post('/commuter', '\App\Http\Controllers\CommuterController@processRoutes')->name('commuter.processRoutes');
    Route::get('/explore', function () {return view('commuter.explore');});
    Route::get('/book', '\App\Http\Controllers\ReservationController@getReservations');
    Route::post('/book', [ReservationController::class, 'store'])->name('storeReservation');
    Route::get('/about', function () { return view('commuter.about');});
    Route::get('/help', function () {return view('commuter.help');});
    Route::get('commuter/details', function () {return view('commuter.details');});
    Route::post('/commuter/details', [CommuterController::class, 'processRoutes']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});

//FOR OPERATOR
Route::prefix('operator')->group(function () {
    Route::get('/opview', [RoutesController::class, 'OPshowDestination'])->name('operator.opview');
    Route::put('/{id}', [TripController::class, 'OPupdate'])->name('trip.OPupdate');
    Route::get('/qr', [RoutesController::class, 'OPQRshowDestination'])->name('operator.qr');
    Route::get('/schedule', [RoutesController::class, 'OPSchedshowDestination'])->name('operator.schedule');
});

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

//update and destory only. edit===update(popup)
// Route::prefix('/superadmin')->middleware('auth')->group(function () {
//     // Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');
//     Route::patch('/', [UserController::class, 'update'])->name('user.update');
//     Route::delete('/', [UserController::class, 'destroy'])->name('user.destroy');
// });

Route::prefix('/trip')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/', [TripController::class, 'index'])->name('trip.index');
    Route::get('/account', [FinancesController::class, 'finances'])->name('trip.account');
    Route::get('/create', [TripController::class, 'create'])->name('trip.create');
    Route::get('/create', [UserController::class, 'index'])->name('trip.create');
    Route::post('/', [TripController::class, 'store'])->name('trip.store');
    Route::get('/create', [RoutesController::class, 'showDestination'])->name('trip.create');
    Route::get('/edit/{id}', [TripController::class, 'edit'])->name('trip.edit');
    Route::put('/{id}', [TripController::class, 'update'])->name('trip.update');
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
    Route::put('/route/{id}', [RoutesController::class, 'update'])->name('route.update');
    Route::delete('/{id}', [RoutesController::class, 'destroy'])->name('route.destroy');
});

//payments and finances

Route::fallback(FallbackController::class);

Auth::routes();
