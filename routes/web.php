<?php

use App\Http\Controllers\FrontendController;
use App\Models\Team;
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

Route::get('/technical-events', [FrontendController::class,'technical_events'])->name('technical_events');
Route::get('/non-technical-events', [FrontendController::class,'non_technical_events'])->name('non_technical_events');
Route::get('/online-events', [FrontendController::class,'online_events'])->name('online_events');
Route::get('/show-event/{event_slug}', [FrontendController::class,'show_event_details'])->name('show_event_details');

Route::post('upload-id',[FrontendController::class,'id_upload'])->name('upload_id');

Route::post('register-team',[FrontendController::class,'register_team'])->name('register_team');
Route::get('payment/{razorpay_order_id}',[FrontendController::class,'payment'])->name('payment');

Route::get('registration-successfull/{payment_id?}',[FrontendController::class,'registration_successfull'])->name('registration_successfull');
// Route::get('/', [FrontendController::class,'index'])->name('index');
//TODO : Add transparecny
//https://codepen.io/AlainBarrios/pen/OEOKgm
//counter

Route::get('register_error',function () {
    return view('frontend.registration_failure');
})->name('payment.modalclosed');

Route::get('duplicate-entry',function () {
    return view('frontend.duplicate-entry');
})->name('duplicate_entry');


// Route::get('foo',function() {
//     $target = storage_path('app/public/');

//     $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
//     symlink($target,$linkFolder);
// });