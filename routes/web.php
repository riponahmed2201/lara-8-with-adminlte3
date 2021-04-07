<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dashboard', DashboardController::class);
