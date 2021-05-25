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
    return view('Categories.FrontEnd.page_1');
})->name('FrontEnd.page_1');

Route::get('/back-end/1', function () {
    return view('Categories.BackEnd.page_1');
})->name('BackEnd.page_1');

Route::get('/other/1', function () {
    return view('Categories.Other.page_1');
})->name('Other.page_1');




// all single posts

// post 1
// frontEnd, css, javascript
Route::get('/how-to-catch-css-pseudo-element-using-javascript', function () {
    return view('Posts.post_1');
})->name('Post_1');

//post 2
// frontEnd, javascript
Route::get('/difference-between-javascript-array-map-and-filter', function () {
    return view('Posts.post_2');
})->name('Post_2');

//post 3
// BackEnd, php, laravel
Route::get('/how-to-increase-laravel-app-performance', function () {
    return view('Posts.post_3');
})->name('Post_3');

//post 4
// frontEnd, js
Route::get('/automatic-show-and-hide-pop-up-message-box', function () {
    return view('Posts.post_4');
})->name('Post_4');

//post 5
// Other, SEO
Route::get('/why-developer-need-basic-seo-knowledge', function () {
    return view('Posts.post_5');
})->name('Post_5');

//post 6
// BackEnd, PHP
Route::get('/upload-an-image-with-validation-using-php', function () {
    return view('Posts.post_6');
})->name('Post_6');

// post 7
// forntEnd, javascript
Route::get('/how-many-ways-we-can-create-object-in-javascript', function () {
    return view('Posts.post_7');
})->name('Post_7');


// post 8
// forntEnd, javascript
Route::get('/the-six-ways-of-selecting-html-dom-element-in-javascript', function () {
    return view('Posts.post_8');
})->name('Post_8');


