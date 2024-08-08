<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::query()->create(
            $request->validate([
                'name' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required', Password::default(), 'min:8', 'confirmed'],
            ])
        );
        Auth::login($user);
    }

    public function create()
    {
        return Inertia::render('Auth/Register');
    }
}
