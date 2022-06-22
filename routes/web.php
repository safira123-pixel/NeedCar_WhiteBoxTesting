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
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ContactController;





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
  Route::get('customer/merk', [CustomerController::class, 'customermerk'])->name('customermerk');


  Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
  Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
  Route::get('/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'testimonialsForm'])->name('Testimonials-form');
  Route::post('/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'storeTestimonialsForm'])->name('Testimonials-form.store');

  Route::group(['prefix' => 'admin'], function() {
    // route home admin
    Route::get('/home', [DashboardController::class, 'index'])->name('admin home');
    // route profile admin
    Route::get('/profile', [DashboardController::class, 'profile']);
    // route merk
    Route::resource('merk', MerkController::class);
    // route car
    Route::resource('car', CarController::class);
    // route customer
     Route::resource('/DataCustomer', UserController::class);
    // route transaction
    // Route::resource('/transaction', [TransactionController::class]);
    // form Report
    // Route::get('/Report', [LaporanController::class, 'index']);
    // process report
    // Route::get('/reportProcess', [LaporanController::class, 'proses']);

    });

  Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer'); 
  });
  
  // admin protected routes
  Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function() {
      Route::get('/home', [DashboardController::class, 'index'])->name('admin home');
    });

  });

    