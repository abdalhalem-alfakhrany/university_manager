<?php
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(SessionController::class)->group(function () {
    Route::get('login', 'create')->name('login');
    Route::post('login', 'store')->name('login');
    Route::delete('logout', 'destroy')->name('logout');
});

// Route::controller(UserController::class)->group(function () {
//     Route::get('register', 'create')->name('register');
//     Route::post('register', 'store')->name('register');
// });
