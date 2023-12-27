<?php

use App\Http\Controllers\Dashboard\BusController;
use App\Http\Controllers\Dashboard\LocationController;
use App\Http\Controllers\Dashboard\RouteController;
use App\Http\Controllers\Dashboard\TripController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Locations
Route::resource('/dashboard/locations', LocationController::class)->middleware(['auth']);

// Buses
Route::resource('/dashboard/buses', BusController::class)->middleware(['auth']);

// Route
Route::resource('/dashboard/routes', RouteController::class)->middleware(['auth']);

// Trips
Route::resource('/dashboard/trips', TripController::class)->middleware(['auth']);


// Search
Route::get('/', [SearchController::class, 'index'])->name('search.index');
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Ticket Controller
Route::get('/ticket/create/{trip}', [TicketController::class, 'create'])->name('ticket.create');


require __DIR__.'/auth.php';
