<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    
    return view('welcome');
});

// Route::get('/about', function () {
//     $name = "Danial";
//     return view('about',['user'=>$name]);
// });

// Route::get('/contact', function () {
//     return view('contact');
// });



// Route::view('/contact', 'about');

Route::get('/about', [UserController::class,'create']);
Route::get('/contact', [TaskController::class,'page']);
Route::get('/testimonial', [TestimonialController::class,'test']);