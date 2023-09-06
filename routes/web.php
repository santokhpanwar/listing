<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CompanyController;

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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/advertise-with-us', function () {
    return view('advertise-with-us');
});


Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::name('user.')->prefix('user')->middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-account', [HomeController::class, 'my_account'])->name('my-account');
    Route::get('/my-listing', [HomeController::class, 'my_listing'])->name('my-listing');
    Route::get('/add-listing', [HomeController::class, 'add_listing'])->name('add-listing');

});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::name('admin.')->prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {  
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('/listings', ListingController::class);
    Route::resource('/companies', CompanyController::class);
});