<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view ('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 0) {
                $request->session()->put('loginId', Auth::user()->id);
                return redirect()->intended(route('dashboard'))
                    ->with('success', 'Login successfully!');
            } elseif (Auth::user()->role == 1) {
                return redirect(route('home'))
                    ->with('success', 'Login successfully!');
            }
        } else {
            // Redirect with error message
            return redirect()->route('login')
                ->with('error', 'Invalid email or password. Please try again.');
        }
    }

    public function register(){
        return view('auth/register');
    }

    public function registerPost(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($user->save())
            {
                return redirect(route('home'))
                    ->with('success', 'User created successfully');
            }
            return redirect(route('register'))
                ->with('error', 'Failed to create account');
        }

        public function logout(Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect(route('user-home'));
        }

    }
