<?php

use Illuminate\Support\Facades\Route;

$ControllersPath = 'App\Http\Controllers';
$userName = '';

Route::get('/', $ControllersPath.'\SimpleController@index');

Route::get('/login', $ControllersPath.'\SimpleController@index');

Route::get('/register', $ControllersPath.'\SimpleController@index');