<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return User::all();
}); */



// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::view('/login', 'pages.login');