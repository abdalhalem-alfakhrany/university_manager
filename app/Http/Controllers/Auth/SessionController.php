<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $result = Auth::attempt($request->only('email', 'password'));
        if ($result) {
            Log::debug(Auth::user()->name . ' login ');
            return redirect()->route('dashboard.index');
        } else {
            return back()->withErrors([
                'email' => 'the provided credentials do not match our records'
            ]);
        }
    }

    public function create()
    {
        return Inertia::render('Auth/Login');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
    }
}
