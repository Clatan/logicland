<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
use App\Models\UserRole;
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
            Log::info('Login success', ['user_id' => $user->user_id]);
            Auth::guard('web')->login($user);
            $request->session()->regenerate();

            $userRole = UserRole::where('user_id', $user->user_id)->first();

            if ($userRole->role_id == 1) {
                return redirect()->route('home');
            }

            if ($userRole->role_id == 2) {
                $progress = Progress::where('user_id', $user->user_id)
                    ->orderByDesc('progress_id')
                    ->first();

                if ($progress) {
                    session([
                        'stage_id' => $progress->stage_id,
                        'attempt_remaining' => $progress->attempt_remaining,
                        'status' => $progress->status,
                    ]);
                }
                return redirect()->route('home');
            }
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

        UserRole::create([
            'user_id' => $user->user_id,
            'role_id' => 2
        ]);

        $progress = Progress::create([
            'user_id' => $user->user_id,
            'stage_id' => 1,
            'attempt_remaining' => 3,
            'status' => 'running'
        ]);

        Auth::guard('web')->login($user);
        $request->session()->regenerate();

        if ($progress) {
            session([
                'stage_id' => $progress->stage_id,
                'attempt_remaining' => $progress->attempt_remaining,
                'status' => $progress->status,
            ]);
        }

        Log::info('User registered', ['user_id' => $user->id]);
        return redirect()->route('home')->with('success', 'Account created successfully!');
    }
}