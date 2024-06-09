<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\VolController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\LoginController;
use App\Models\voyage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HotelController::class,'index1']);


Route::get('/hotels',[HotelController::class,'index']);

Route::get('/hotel/{id}',[HotelController::class,'show'])
->where('id','\d+')
->name('hotel.show');


Route::get('/reserve',[HotelController::class,'index31']);

// Route::get('/reserver2',[HotelController::class,'index31']);
// Route::get('/reserver3',[HotelController::class,'index31']);


Route::get('/flights',[VolController::class,'index']);

Route::get('/flights/{id}',[HotelController::class,'show'])
->where('id','\d+')
->name('vol.show');

Route::get('/search', [VolController::class, 'searchs'])->name('search');



Route::get('/tours',[VoyageController::class,'index']);

Route::get('/tours/{id}',[VoyageController::class,'show'])
->where('id','\d+')
->name('voyage.show');

Route::get('/tours-search',[VoyageController::class,'search']);


Route::get('/about',[VolController::class,'index2']);


Route::get('/contact',[ContactController::class,'index']);

Route::get('/login',[LoginController::class,'index']);

Route::get('/registre',[LoginController::class,'index2']);