<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function profile(){
        return view('users.profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:14000',
        ]);

        $user->name = $request->name;

        if ($request->hasFile('profile_image')) {
            // Delete old profile image if exists
            if ($user->profile) {
                Storage::delete($user->profile);
            }

            // Store new profile image
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile = $path;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
