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

// HOMEPAGE UTAMA
  Route::get('/homepage', [HomepageController::class,'index']);
  Route::get('/homepage/login', [HomepageController::class,'login']);
  Route::get('/homepage/register', [HomepageController::class,'register']);
  Route::get('/homepage/about', [HomepageController::class, 'about'])->name('about');
  Route::get('homepage/testimonials', [HomepageController::class, 'testimonials'])->name('testimonials');

// HOMEPAGE CUSTOMER
  // Route::get('/customer', [CustomerController::class, 'index'])->name('customer'); 
  // Route::get('/customer/about', [CustomerController::class, 'about']);
  // Route::get('customer/testimonials', [CustomerController::class, 'testimonials'])->name('customer testimonials');
  // Route::get('customer/merk', [CustomerController::class, 'customermerk'])->name('customermerk');
  // Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
  // Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
  // Route::get('/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'testimonialsForm'])->name('Testimonials-form');
  // Route::post('/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'storeTestimonialsForm'])->name('Testimonials-form.store');
  // Route::get('customer/datacar', [CustomerController::class, 'datacar'])->name('car-Data');


  //ADMIN

  Route::get('/admin/DataCustomer',[UserController::class, 'index'])->name(' Customer index');
  // Route::get('/admin/DataCustomer/create',[UserController::class, 'create'])->name(' Customer create');
  // Route::get('/admin/DataCustomer/{id}/edit',[UserController::class, 'edit'])->name('Customer.edit');
  //   Route::get('/admin/DataCustomer/{id}/show',[UserController::class, 'show'])->name('Customer.show');
  //   Route::get('/admin/DataCustomer/{id}/destroy',[UserController::class, 'destroy'])->name('Customer.destroy');
  //   Route::post('/admin/DataCustomer/store',[UserController::class, 'store'])->name('Customer.store');
  //   Route::post('/admin/DataCustomer/{id}/update',[UserController::class, 'update'])->name('Customer.update');

    // Route::get('admin/merk/create',[MerkController::class, 'create'])->name(' merk.create');
    // Route::get('admin/merk/{id}/edit',[MerkController::class, 'edit'])->name('merk.edit');
    //   Route::get('admin/merk/{id}/show',[MerkController::class, 'show'])->name('merk.show');
    //   Route::get('admin/merk/{id}/destroy',[MerkController::class, 'destroy'])->name('merk.destroy');
    //   Route::post('admin/merk/store',[MerkController::class, 'store'])->name('merk.store');
    //   Route::post('admin/merk/{id}/update',[MerkController::class, 'update'])->name('merk.update');
  
  Route::group(['prefix' => 'admin'], function() {

    // route home admin
    // Route::get('/home', [DashboardController::class, 'index'])->name('home page');

    // route profile admin
    Route::get('/profile', [DashboardController::class, 'profile']);

    // route merk
    Route::resource('merk', MerkController::class);
    // Route::get('/merk',[MerkController::class, 'index'])->name(' merk.index');
    // Route::get('/merk/create',[MerkController::class, 'create'])->name(' merk.create');
    // Route::get('/merk/{id}/edit',[MerkController::class, 'edit'])->name('merk.edit');
    // Route::get('/merk/{id}/show',[MerkController::class, 'show'])->name('merk.show');
    // Route::get('/merk/{id}/destroy',[MerkController::class, 'destroy'])->name('merk.destroy');
    // Route::post('/merk/store',[MerkController::class, 'store'])->name('merk.store');
    // Route::post('/merk/{id}/update',[MerkController::class, 'update'])->name('merk.update');

  // route Customer
  Route::resource('DataCustomer', UserController::class);
    // Route::get('/DataCustomer',[UserController::class, 'index'])->name(' Customer index');
    // Route::get('/DataCustomer/create',[UserController::class, 'create'])->name(' Customer create');
    // Route::get('/DataCustomer/{id_user}/edit',[UserController::class, 'edit'])->name('Customer.edit');
    // Route::get('/DataCustomer/{id_user}/show',[UserController::class, 'show'])->name('Customer.show');
    // Route::get('/DataCustomer/{id_user}/destroy',[UserController::class, 'destroy'])->name('Customer.destroy');
    // Route::post('/DataCustomer/store',[UserController::class, 'store'])->name('Customer.store');
    // Route::post('/DataCustomer/{id_user}/update',[UserController::class, 'update'])->name('Customer.update');

    // route car
     Route::resource('car', CarController::class);
      // Route::get('/admin/DataCustomer',[UserController::class, 'index'])->name(' Customer index');
      // Route::get('/admin/DataCustomer/create',[UserController::class, 'create'])->name(' Customer create');
      // Route::get('/admin/DataCustomer/{id_user}/edit',[UserController::class, 'edit'])->name('Customer.edit');
      // Route::get('/admin/DataCustomer/{id_user}/show',[UserController::class, 'show'])->name('Customer.show');
      // Route::get('/admin/DataCustomer/{id_user}/destroy',[UserController::class, 'destroy'])->name('Customer.destroy');
      // Route::post('/admin/DataCustomer/store',[UserController::class, 'store'])->name('Customer.store');
      // Route::post('/admin/DataCustomer/{id_user}/update',[UserController::class, 'update'])->name('Customer.update');

    // route transaction
    Route::resource('transaction', TransactionController::class);


    // route cart

    // route report

    //route checkout

    });

  // customer detected route
    Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer'); 
    Route::get('/customer/about', [CustomerController::class, 'about']);
  Route::get('customer/testimonials', [CustomerController::class, 'testimonials'])->name('customer testimonials');
  Route::get('customer/merk', [CustomerController::class, 'customermerk'])->name('customermerk');
  Route::get('/customer/datacar', [CustomerController::class, 'datacar'])->name('car-Data');
  // Route::get('customer/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
  // Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
  // Route::get('customer/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'testimonialsForm'])->name('Testimonials-form');
  // Route::post('/testimonials-form', [App\Http\Controllers\TestimonialsController::class, 'storeTestimonialsForm'])->name('Testimonials-form.store');
  Route::get('customer/datacar', [CustomerController::class, 'datacar'])->name('car-Data');
  });
  
  // admin protected routes
  Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function() {
      Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    });

  });

    