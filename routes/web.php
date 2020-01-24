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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('app/teams','people\TeamController@index')->name('teams');

// Route::middleware(['auth'])
//                 ->group(function()
//                 {

//     // Route::post('/threads','ThreadController@store');
//     // Route::put('/threads/{thread}','ThreadController@update');
//     // Route::get('/threads/{thread}/edit','ThreadController@edit');

//     // Route::get('/replies/{id}','ReplyController@show');
//     // Route::post('/replies','ReplyController@store');

//     // Route::get('/reply/highlited/{id}','ReplyController@highlith');

//     });
