<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        Log::info('Attempting login', ['username' => $request->username]);

        if ($user && Hash::check($request->password, $user->password)) {
            Log::info('Login success', ['user_id' => $user->id]);
            Auth::login($user);
            return redirect()->route('home'); 
        } else {
            Log::warning('Login failed', ['username' => $request->username]);
            return back()->with('error', 'Wrong username or password!');
        }
    }
}
