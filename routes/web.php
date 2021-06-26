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

Route::get('/', 'WordbooksController@index'); 

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');


// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('wordbooks', 'WordbooksController', ['only' => ['store', 'destroy']]);
    Route::resource('words', 'WordsController', ['only' => ['store', 'destroy']]);
    
    Route::group(['prefix' => 'workbooks/{id}'], function () {
        Route::resource('words', 'WordsController', ['only' => ['create']]);
        // Route::post('words/delete/{word_id}', 'WordsController@destroy')->name('word.destroy');
        Route::resource('learning', 'LearningsController', ['only' => ['index']]);
        Route::get('next/{num}', 'LearningsController@next')->name('learning.next');
    });
});




Route::view('/wordbook_registration', 'wordbook_registration');


//Route::view('/word_registration', 'word_registration');
// Route::get('word/{id}', 'WordsController@index');
// Route::get('word', 'WordsController@create')->name('word.create');

