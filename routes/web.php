<?php

use App\Http\Controllers\OfferController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get("/placeOffer", [OfferController::class, "show"])->name("placeOffer");
    Route::post("/placeOffer", [OfferController::class, "submit"])->name("placeOffer.submit");
});

require __DIR__.'/auth.php';
