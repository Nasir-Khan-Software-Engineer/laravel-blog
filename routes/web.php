<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PostController;







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


Route::get('/terms-and-condition', function () {
    return view('Main.condition');
})->name('Condition');

Route::get('/privacy-policy', function () {
    return view('Main.privacy');
})->name('Privacy');

Route::get('/our-service', function () {
    return view('Main.service');
})->name('Service');


// information
    
Route::get('/info/valid-email', function () {
    return view('Info.valid-email');
})->name('ValidEmail');

// end




Route::get('/post/search/{keyword}', [PostController::class,'search'])->name('SearchPost');

Route::post('/contact/send-email', [ContactController::class,'sendEmail'])->name('SendEmail');

Route::post('/comment/ofpost', [CommentController::class,'all_comments_of_this_post'])->name('AllCommentsOfPost');
Route::post('/comment/store', [CommentController::class,'store_comment'])->name('StoreComment');

Route::post('/subscriber/store', [SubscriberController::class,'store'])->name('StoreSubscriber');

// code download
Route::get('/download/{id}/{title}', [DownloadController::class,'page'])->name('Download.Page');
Route::post('/download/code', [DownloadController::class,'download'])->name('Download.Code');
// end


// user confirmation
    
Route::get('/user/confirm/{email}/{token}', [UserVerificationController::class,'user_confirm'])->name('User.Confirm');

// end user confirmation


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
Route::get('/how-many-ways-we-can-select-html-tag-or-html-dom-elements-in-javascript', function () {
    return view('Posts.post_1');
})->name('Single_Post_1');


//post 2
// frontEnd, javascript
Route::get('/how-to-create-popup-modal-box-in-javascript', function () {
    return view('Posts.post_2');
})->name('Single_Post_2');



//post 3
// frontEnd, javascript
Route::get('/onlick-popup-full-size-image-in-jquery', function () {
    return view('Posts.post_3');
})->name('Single_Post_3');



//post 4
// BackEnd, Laravel
Route::get('/laravel-route-not-found-exception', function () {
    return view('Posts.post_4');
})->name('Single_Post_4');



//post 5
// FrontEnd, js
Route::get('/responsive-dropdown-menu-with-submenu', function () {
    return view('Posts.post_5');
})->name('Single_Post_5');


//post 6
// FrontEnd, js
Route::get('/unit-converter-Javascript', function () {
    return view('Posts.post_6');
})->name('Single_Post_6');

//post 7
// BackEnd, MySQL
Route::get('/important-mysql-short-note-pdf-for-beginners', function () {
    return view('Posts.post_7');
})->name('Single_Post_7');


// post 8
// BackEnd, MySQL
Route::get('/how-to-create-a-table-in-mysql', function () {
    return view('Posts.post_8');
})->name('Single_Post_8');


// post 9
// BackEnd, MySQL
Route::get('/parent-child-table-in-sql', function () {
    return view('Posts.post_9');
})->name('Single_Post_9');


// post 10
// FrontEnd, JS
Route::get('/select-css-pseudo-element-using-javascript', function () {
    return view('Posts.post_10');
})->name('Single_Post_10');


// post 11
// FrontEnd, HTML CSS
Route::get('/center-image-vertically-and-horizontally', function () {
    return view('Posts.post_11');
})->name('Single_Post_11');



// post 12
// FrontEnd, HTML CSS
Route::get('/call-javascript-function-after-div-load', function () {
    return view('Posts.post_12');
})->name('Single_Post_12');










Route::any('{query}', 
  function() { return back(); })
  ->where('query', '.*');