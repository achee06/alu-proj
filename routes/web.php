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

Route::get('pages/gallery', function()
    {
        return View::make('gallery');
    })->middleware('buildnavbar');

Route::get('user/dashboard', 'LoginController@userDashboard')->middleware('buildnavbar');

Route::get('user/tracer', function()
    {
        return View('User/tracer');
    })->middleware('buildnavbar');

Route::get('pages/index', function () {
    return redirect('/');
})->middleware('buildnavbar');

Route::get('pages/registration', 'RegisterController@create')->middleware('buildnavbar')->name('registrationIndex');

Route::get('pages/login', function () {
    return view('login');
})->middleware('buildnavbar')->name('login');

Route::get('admin/login', function () {
    return redirect('admin/login');
})->name('adminLogin');

Route::post('pages/login', 'LoginController@postLogin')->middleware('buildnavbar')->name('post_login');

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
