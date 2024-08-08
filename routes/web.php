<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::prefix('auth')->group(fn() => require_once __DIR__ . '/auth.php');
Route::prefix('dashboard')->name('dashboard.')->group(fn ()=> require_once __DIR__ . '/dashboard.php');
