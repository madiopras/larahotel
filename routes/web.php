<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for categories
Route::resource('categories', CategoryController::class);

// Routes for rooms
Route::resource('rooms', RoomController::class);

// Routes for customers
Route::resource('customers', CustomerController::class);

// Routes for reservations
Route::resource('reservations', ReservationController::class);
