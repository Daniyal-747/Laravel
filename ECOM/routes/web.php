<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\ProductsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/testimonial', [TestimonialController::class, 'index']);
Route::get('/signup', [FormController::class, 'index']);
Route::post('/data', [FormController::class, 'getData']); //This is used to post form after submit
Route::resource('product', ProductsController::class);