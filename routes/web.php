<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/single-category', [HomeController::class, 'single_category'])->name('single-category');
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
Route::middleware(['auth', 'user-access:admin'])->group(function () {  
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/listing', [ListingController::class, 'index'])->name('admin.listing');
    Route::get('/admin/listing/create', [ListingController::class, 'create'])->name('admin.create');
    Route::post('/admin/listing', [ListingController::class, 'store']);
    Route::get('/admin/listing/{id}/edit', [ListingController::class, 'edit']);
    Route::get('/admin/listing/{id}', [ListingController::class, 'show']);
    Route::put('/admin/listing/{id}', [ListingController::class, 'update']);
    Route::delete('/admin/listing/{id}', [ListingController::class, 'destroy']);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
// });
