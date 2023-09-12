<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/single-category', [HomeController::class, 'single_category'])->name('single_category');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/advertise-with-us', [HomeController::class, 'advertise_with_us'])->name('advertise_with_us');


Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::name('user.')->prefix('user')->middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-account', [AdminController::class, 'my_account'])->name('my-account');
    Route::get('/my-listing', [AdminController::class, 'my_listing'])->name('my-listing');
    Route::get('/add-listing', [AdminController::class, 'add_listing'])->name('add-listing');

});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::name('admin.')->prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {  
    Route::get('/dashboard', [AdminController::class, 'adminHome'])->name('dashboard');
    Route::resource('/listings', ListingController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/categories', CategoryController::class);
});