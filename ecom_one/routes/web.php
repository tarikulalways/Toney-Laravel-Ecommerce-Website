<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Bakend\ProductController;
use App\Http\Controllers\Frontend\ShopeController;
use App\Http\Controllers\Bakend\CategoryController;
use App\Http\Controllers\Bakend\TestimonialController;
use App\Http\Controllers\Frontend\ShipingCartController;

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
    return view('frontend.pages.home');
});

// frontend home page dynamic
Route::controller(HomeController::class)->prefix('')->group(function(){
    Route::get('/', 'index')->name('home');
});

// frontend shope page dynamic
Route::controller(ShopeController::class)->prefix('shope')->group(function(){
    Route::get('/details', 'index')->name('index.shope');
    Route::get('/single-product', 'single')->name('single-product.shope');
});

// add cart opareations
Route::controller(ShipingCartController::class)->prefix('/cart')->group(function(){
    Route::post('/addToCart', 'store')->name('store.cart');
    Route::get('/cart-details', 'index')->name('index.cart');
    Route::get('/cart-update/{shipingCart}', 'update')->name('update.cart');
    Route::get('cart-destroy/{shipingCart}', 'destroy')->name('destroy.cart');
});

// bakend page dynamic
Route::get('/admin/dashbord', function(){
    return view('bakend.pages.dashbord');
});

// category operations
Route::controller(CategoryController::class)->prefix('/admin')->group(function(){
    Route::get('/add-category', 'create')->name('create.category');
    Route::post('/store-category', 'store')->name('store.category');
    Route::get('/index-category', 'index')->name('index.category');
    Route::get('/edit-category/{id}', 'edit')->name('edit.category');
    Route::post('/update-category/{id}', 'update')->name('update.category');
    Route::get('/destroy-category/{id}', 'destroy')->name('destroy.category');
});

// testimonial operations
Route::controller(TestimonialController::class)->prefix('/admin')->group(function(){
    Route::get('/create-testimonial', 'create')->name('create.testimonial');
    Route::get('/index-testimonial', 'index')->name('index.testimonial');
    Route::post('/store-testimonial', 'store')->name('store.testimonial');
    Route::get('/edit-testimonial/{testimonial}', 'edit')->name('edit.testimonial');
    Route::post('update-testimonial/{testimonial}', 'update')->name('update.testimonial');
    Route::get('destroy-testimonial/{testimonial}', 'destroy')->name('destroy.testimonial');
    Route::get('show-testimonial/{testimonial}', 'show')->name('show.testiimonial');
});

// product orperations
Route::controller(ProductController::class)->prefix('/admin')->group(function(){
    Route::get('/create-product', 'create')->name('create.product');
    Route::post('/store-product', 'store')->name('store.product');
    Route::get('/index-product', 'index')->name('index.product');
   Route::get('/edit-product/{product}', 'edit')->name('edit.product');
   Route::post('/update-product/{product}', 'update')->name('update.product');
   Route::get('/destroy-product/{product}', 'destroy')->name('destroy.product');
});

Route::get('/shope',function(){
    return view('frontend.pages.shope');
});

