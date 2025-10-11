<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        $username = $user->username;
        $email = $user->email;

        return view('setting', compact('username', 'email'));
    }

    public function updatePassword(Request $request)
    {
        $request->merge([
            'current_password' => trim($request->current_password),
            'new_password' => trim($request->new_password),
            'new_password_confirmation' => trim($request->new_password_confirmation),
        ]);

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ], [
            'new_password.confirmed' => 'New password confirmation does not match.',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Old password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        if($user->save()){
            return redirect()->route('home')->with('success', 'Password changed successfully.');
        } else {
            return back()->withErrors(['msg' => 'Failed to update password.']);
        }
    }
}