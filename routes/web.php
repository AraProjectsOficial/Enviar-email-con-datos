<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(SendEmailController::class)->group(function(){
    Route::get('/', 'viewForm')->name('inicio');
    Route::post('/sendEmail', 'sendEmail')->name('sendEmail');
});
