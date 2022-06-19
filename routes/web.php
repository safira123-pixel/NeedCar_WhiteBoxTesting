<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TransactionController;




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

// Route::get('/', function () {
//     return view('homepage.index')->name('homepage');
// });

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get('/homepage', [HomepageController::class,'index']);
  Route::get('/homepage/login', [HomepageController::class,'login']);
  Route::get('/homepage/register', [HomepageController::class,'register']);
  Route::get('/homepage/about', [HomepageController::class, 'about'])->name('about');
  Route::get('homepage/testimonials', [HomepageController::class, 'testimonials'])->name('testimonials');

  Route::get('/customer', [CustomerController::class, 'index'])->name('customer'); 
  Route::get('/customer/about', [CustomerController::class, 'about']);
  Route::get('customer/testimonials', [CustomerController::class, 'testimonials'])->name('testimonials');

  Route::group(['prefix' => 'admin'], function() {
      Route::get('/profile', [DashboardController::class, 'profile']);

    });

  Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer'); 
  });
  
  // admin protected routes
  Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function() {
      Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    });

  });

Route::resource('car', CarController::class);
Route::get('/page', [CarController::class, 'page']);
Route::get('/search', [CarController::class, 'search']);
    