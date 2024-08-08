<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('auth/login', fn() => Inertia::render('Auth/Login'))->name('login');
Route::post('auth/login', function (Request $request) {
    $result = Auth::attempt($request->only('email', 'password'));
    Log::debug($result);
    Log::debug(Auth::user());
})->name('login');
Route::get('auth/register', fn() => Inertia::render('Auth/Register'));
Route::post('auth/register', function (Request $request) {
    $user = User::query()->create(
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', Password::default(), 'min:8', 'confirmed'],
        ])
    );
    Auth::login($user);
    Log::debug($user);
});

Route::post('auth/logout', fn() => Auth::logout());

Route::get('/dashboard', fn() => Inertia::render('Dashboard/Index'))
       ->middleware('auth')
    ->name('dashboard');
