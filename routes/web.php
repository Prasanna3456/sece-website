<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FrontendController::class,'index'])->name('index');
Route::get('/about-us', [FrontendController::class,'about_us'])->name('about_us');
Route::get('/events', [FrontendController::class,'events'])->name('events');
Route::get('/show-event', [FrontendController::class,'show_event_details'])->name('show_event_details');

// Route::get('/', [FrontendController::class,'index'])->name('index');

//TODO : Add transparecny
//https://codepen.io/AlainBarrios/pen/OEOKgm
//counter