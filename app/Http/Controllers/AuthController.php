<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegistration() {
        return view('auth.registrasi');
    }

    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:10|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => $request->password,
            'verification_token' => Str::random(60),
            'email_verified' => false
        ]);

        Mail::to($request->email)->send(new VerifyEmail($user));

        return redirect()->route('auth.login');
    }

    public function verifyEmail($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified = true;
            $user->email_verified_at = now();
            $user->save();

            return redirect()->route('auth.login')->with('success', 'Your account has been created successfully');
        } else {
            return redirect()->route('auth.login')->with('error', 'Invalid verification token');
        }
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infoLogin)) {
            if(Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                if (Auth::user()->email_verified !== 0) {
                    return redirect()->route('landingpage');
                } else {
                    Auth::logout();
                    return redirect()->route('auth.login');
                }
            }
        } else {
            return redirect()->route('auth.login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('landingpage');
    }
}
