<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController,RequestCallController,HomeController};
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

Route::get('/',[HomeController::class, 'index'])->name("home");
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/services', function () {
    return view('services');
})->name("services");

Auth::routes();


Route::post('/message', [RequestCallController::class, 'message'])->name('message');

Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('request-call/{requestCall}', [RequestCallController::class, 'show'])->name('request-call.show');
    Route::get('request-call/{requestCall}/edit', [RequestCallController::class, 'edit'])->name('request-call.edit');
    Route::put('request-call/{requestCall}/update', [RequestCallController::class, 'update'])->name('request-call.update');
    Route::delete('request-call/{requestCall}/destroy', [RequestCallController::class, 'destroy'])->name('request-call.destroy');
});
