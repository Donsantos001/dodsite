<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('site.home');

Route::get('/news', 'NewsController@index')->name('site.news');

Route::get('/newsdetails/{id?}', 'NewsController@details')->name('site.newsdetail');

Route::get('/article', function() {
    return view('site.article');
})->name('site.article');

Route::get('/articledetails', function() {
    return view('site.articledetail');
})->name('site.articledetail');

Route::get('/dubaiexpo', function() {
    return view('site.dubaiexpo');
})->name('site.dubaiexpo');

Route::get('/dubaiexpodetails', function() {
    return view('site.dubaiexpodetail');
})->name('site.dubaiexpodetail');

Route::get('/events', function() {
    return view('site.events');
})->name('site.events');

Route::get('/eventsdetails', function() {
    return view('site.eventsdetail');
})->name('site.eventsdetail');

Route::get('/video', function() {
    return view('site.video');
})->name('site.video');

Route::get('/videodetails', function() {
    return view('site.videodetail');
})->name('site.videoodetail');