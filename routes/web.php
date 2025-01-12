<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PlaceController;




    Route::get('/', function () {
        return view('users.home');
    })->name('user-home');

    Route::get('/about', function () {
        return view('users.about');
    })->name('about');


    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/profile', [DashboardController::class, 'update'])->name('profile.update');
    Route::resource('posts', PostController::class);






    //ADMIN ONLY
    Route::get('admin/users', [UserController::class, 'index'])
    ->middleware('role')
    ->name('admin.users.index');
    

    Route::get('admin/users/create', [UserController::class, 'create'])
    ->middleware('role')
    ->name('admin.users.create');


    Route::post('admin/users', [UserController::class, 'store'])
    ->middleware('role')
    ->name('admin.users.store');


    Route::get('admin/users/{user}', [UserController::class, 'show'])
    ->middleware('role')
    ->name('admin.users.show');


    Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])
    ->middleware('role')
    ->name('admin.users.edit');


    Route::put('admin/users/{user}', [UserController::class, 'update'])
    ->middleware('role')
    ->name('admin.users.update');


    Route::delete('admin/users/{user}', [UserController::class, 'destroy'])
    ->middleware('role')
    ->name('admin.users.destroy');


    Route::get('/admin/posts', [AdminPostController::class, 'index'])
    ->middleware('role')
    ->name('admin.posts.index');


    Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])
    ->middleware('role')
    ->name('admin.posts.destroy');





Route::get('/places/beaches-resorts', [PlaceController::class, 'beachesResorts'])->name('places.beaches_resorts');


Route::get('/posts/{post}', [PostController::class, 'showPost'])
->middleware('role')
->name('posts.show');


Route::get('/places/cities', [PlaceController::class, 'cities'])->name('places.cities');


Route::get('/places/landscapes', [PlaceController::class, 'landscapes'])->name('places.landscapes');
