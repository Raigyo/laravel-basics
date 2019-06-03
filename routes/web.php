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

//laravel will display the routes in the same order than in this file

//route to HP
/*Route::get('/', function () {
    return view('welcome');
});*/

//contollers -- app/Http/Controllers/WelcomeController
// -- php artisan make:controller WelcomeController
Route::get('/', 'WelcomeController@index')->name('home');

// display article/n
/*Route::get('article/{n}', function($n) {
    return view('article')->withNumber($n);
    //or
    //return view('article')->with('number', $n);
    //or in an array
    //return view('article', ['number' => $n]);
})->where('n', '[0-9]+');*/

// display article/n - using controller
Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

//routes for form
Route::get('users', 'UsersController@create')->name('users');
Route::post('users', 'UsersController@store')->name('thanks');
/*Route::get('infos', function() {
    return view('infos');
})->name('infos');*/


Route::get('contact', 'ContactController@create')->name('contact');
Route::post('contact', 'ContactController@store')->name('confirm');


Route::get('photo', 'PhotoController@create')->name('photo');
Route::post('photo', 'PhotoController@store')->name('photo_ok');

//route to contact
/*Route::get('contact', function() {
    return view('contact');
})->name('contact');*/

//route to about + other way to name it
Route::get('about', ['as'=>'about',function() {
   return view('about');
}]);

// display invoice/n
Route::get('invoice/{n}', function($n) {
    return view('invoice')->withNumber($n);
})->where('n', '[0-9]+');

//route to page number
Route::get('{n}', function($n) {
    return 'I\'m the page ' . $n . ' !';
})->where('n', '[1-3]');

//laravel returns a json 'application/json'
Route::get('json', function () {
    return ['1', '2', '3', 'I\'m a JSON'];
});

//send a status
Route::get('responsetest', function () {
    return response('Header response', 206)->header('Content-Type', 'text/plain');
});

//display a view without blade template
Route::get('view1/{n}', function($n) {
    return view('view1')->with('number', $n);
})->where('n', '[0-9]+');

//display a view withblade template
Route::get('view2/{n}', function($n) {
    return view('view2')->with('number', $n);
})->where('n', '[0-9]+');

//redirect -- https://www.tutorialspoint.com/laravel/laravel_redirections.htm
Route::get('/test', ['as'=>'testing',function() {
   return view('test');
}]);

Route::get('redirect',function() {
   return redirect()->route('testing');
});
