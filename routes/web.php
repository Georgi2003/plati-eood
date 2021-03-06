<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([IsAdmin::class])->group(function () {
	Route::resource('/insuranceCompanies', 'App\Http\Controllers\InsuranceCompanyController');
	Route::resource('/kaskoRequests', 'App\Http\Controllers\kaskoRequestController');
	Route::resource('/users', 'App\Http\Controllers\UserController');
	Route::resource('/tariffs', 'App\Http\Controllers\InsuranceCompanyPriceController');
});

Route::resource('/CivilResponsibilityRequests', 'App\Http\Controllers\CivilResponsibilityRequestController');

Route::resource('/messages', 'App\Http\Controllers\MessageController');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');