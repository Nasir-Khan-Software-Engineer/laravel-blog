<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// main pages
Route::get('/', function () {
    return view('Main.home');
})->name('Home');

Route::get('/about', function () {
    return view('Main.about');
})->name('About');

Route::get('/contact', function () {
    return view('Main.contact');
})->name('Contact');

Route::post('/contact/send-email', [ContactController::class,'sendEmail'])->name('SendEmail');


// category pages

Route::get('/front-end/1', function () {
    return view('Categoires.FrontEnd.page_1');
})->name('FrontEnd.page_1');

Route::get('/back-end/1', function () {
    return view('Categoires.BackEnd.page_1');
})->name('BackEnd.page_1');

Route::get('/other/1', function () {
    return view('Categoires.Other.page_1');
})->name('Other.page_1');




// all single posts

Route::get('/difference-between-js-filter-and-map', function () {
    return view('Posts.post_1');
})->name('Post_1');

