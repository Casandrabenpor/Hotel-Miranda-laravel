<?php

use App\Models\Contact;
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
    return view('index');
});


Route::get('/contact', [ContactController::class, 'showContact']);
Route::post('/contact', [ContactController::class, 'postContact']);
Route::get('/about', [AboutController::class, 'showAbout']);
Route::get('/offer', [OfferController::class, 'showOffer']);
Route::get('/room', [RoomController::class, 'showRoom']);