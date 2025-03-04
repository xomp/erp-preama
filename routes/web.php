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
    return view('pages.dashboard');
});

Route::view('/login', 'pages.login');

Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/deals/{pipeline?}', function($pipeline = 'Все сделки'){
    return view('pages.deals', ['pipeline' => $pipeline]);
});

Route::view('/orders', 'pages.orders');
Route::name('customers')->group(function () {
    Route::view('/customers', 'pages.customers');
    Route::view('/customers-people', 'pages.customers-people');
    Route::view('/invoices', 'pages.invoices');
    Route::view('/objects', 'pages.objects');
});
Route::prefix('shifts')->name('shifts')->group(function () {
    Route::view('/search', 'pages.shifts.search');
});
Route::name('workers')->group(function () {
    Route::view('/workers', 'pages.workers');
    Route::view('/verifications', 'pages.verifications');
    Route::view('/tags', 'pages.tags');
    Route::view('/professions', 'pages.professions');
    Route::view('/tax-cabinet', 'pages.tax-cabinet');
});
Route::name('operators')->group(function () {
    Route::view('/customer-operators', 'pages.customer-operators');
    Route::view('/operators', 'pages.operators');
});

Route::view('/sources', 'pages.sources');
Route::view('/conversion', 'pages.conversion');
Route::view('/candidates', 'pages.candidates');
Route::view('/candidate', 'pages.candidate');
Route::view('/companies', 'pages.companies');
Route::view('/calendar', 'pages.calendar');
Route::view('/documents', 'pages.documents');
Route::view('/users', 'pages.users');
Route::view('/integrations', 'pages.integrations');
Route::view('/settings', 'pages.settings');