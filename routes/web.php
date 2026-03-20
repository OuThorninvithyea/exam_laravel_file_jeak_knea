<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoatController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boats', BoatController::class);
