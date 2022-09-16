<?php

use Illuminate\Support\Facades\Route;

$ControllersPath = 'App\Http\Controllers';
$userName = '';

Route::view('/', 'home');

Route::name('user.')->group(function() {
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function() {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', function ($id) {
        
    });

    Route::post('/logout', function ($id) {
        
    });


    Route::get('/register', function() {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('register');
    });
});