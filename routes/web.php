<?php

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


/*Route::get('/', function () {
    return view('alumni');
})->middleware('buildnavbar');

Route::get('/blank', function () {
    return view('blank');
})->middleware('buildnavbar');*/


Route::get('pages/index', function () {
    return redirect('/');
})->middleware('buildnavbar');

Route::get('pages/registration', function () {
    return view('Registration');
})->middleware('buildnavbar');

Route::resource('pages/registration/success', 'RegisterController');
/*Route::post('Registration', 'RegisterController@store');*/

/* Index page */
Route::get('/', 'NewsEventsController@getAnnouncement')->middleware('buildnavbar');

// News and events routes
Route::get('search', 'NewsEventsController@getSearch')->middleware('buildnavbar');

Route::get('category/latest', 'NewsEventsController@getLatest')->middleware('buildnavbar');

Route::get('category/{id}', 'NewsEventsController@getCategory')->middleware('buildnavbar');

Route::get('article/{slug}', 'NewsEventsController@getArticle')->middleware('buildnavbar');

Route::get('pages/events', 'NewsEventsController@getIndex')->middleware('buildnavbar');
//End News and events routes

// Dynamic handling of pages
Route::get('pages/{slug}', 'PagesController@dynamicPages')->middleware('buildnavbar');