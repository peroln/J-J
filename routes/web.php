<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestCallController;
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

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/services', function () {
    return view('services');
})->name("services");

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::post('/message', [RequestCallController::class, 'store'])->name('message');
