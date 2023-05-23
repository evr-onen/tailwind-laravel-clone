<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckToken;



Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});

// Route::get('/dashboard', function () {
//     return view('pages/dashboard');
// });
Route::get('/home', function () {
    return view('pages/home');
});

Route::group(['middleware' => CheckToken::class, 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('pages/dashboard');
    });
});
