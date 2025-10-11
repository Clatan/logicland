<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
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
            Auth::guard('web')->login($user);
            $request->session()->regenerate();
            return redirect()->route('home'); 
        } else {
            Log::warning('Login failed', ['username' => $request->username]);
            return back()->with('error', 'Wrong username or password!');
        }


    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email|regex:/@gmail\.com$/',
            'username' => 'required|unique:users,username|min:6|max:30|regex:/^[a-zA-Z0-9_]+$/',
            'password' => 'required|min:6'
        ],
            [
            'email.regex' => 'Email must use @gmail.com',
            'email.unique' => 'Email already registered.',

            'username.unique' => 'Username already taken.',
            'username.regex' => 'Username can only contain letters, numbers, and underscores.',
            'username.min' => 'Username minimal 6 characters.',
            
            'password.min' => 'Password minimal 6 characters.'
        ]);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role_id' => 2
        ]);

        Auth::guard('web')->login($user);
        $request->session()->regenerate();
        Log::info('User registered', ['user_id' => $user->id]);
        return redirect()->route('home')->with('success', 'Account created successfully!');
    }
}