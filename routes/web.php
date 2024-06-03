<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    return User::all();
});

//SHA256:vfUq00yC9PhAYSH2M8hLkroz8YPRzB0l3EIrTI5mrQ0