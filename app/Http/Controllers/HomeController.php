<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::check() && (Auth::user()->role == 0 || Auth::user()->role == 1)) {
            return view('users.home');
        } else {
            // Redirect or handle case when user is not logged in or doesn't have the correct role
            return redirect()->route('login'); // Example redirect to login
        }
    }
}
