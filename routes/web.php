<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// main routes 
Route::get('/', [MainController::class, 'index'])->name('undangan');

