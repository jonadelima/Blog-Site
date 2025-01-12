<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function beachesResorts()
    {
        $posts = Post::where('place', 'Beaches/Resorts')->get();
        return view('places.beaches_resort', compact('posts'));
    }

    public function cities()
    {
        $posts = Post::where('place', 'Cities')->get();
        return view('places.cities', compact('posts'));
    }

    public function landscapes()
    {
        $posts = Post::where('place', 'Landscape')->get();
        return view('places.landscapes', compact('posts'));
    }
}