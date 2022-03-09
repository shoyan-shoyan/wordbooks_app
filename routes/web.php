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

Route::get('/', 'WordbooksController@index')->name('top'); 

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request'); // view は auth.passwords.email
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset'); // view は auth.passwords.reset
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    
// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
    });
    
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit','update']]);
    Route::resource('wordbooks', 'WordbooksController', ['only' => ['store', 'destroy','edit','update','create','show']]);
    Route::resource('wordbooks', 'WordbooksController', ['only' => ['store']])->middleware('throttle:3, 1');
    Route::resource('words', 'WordsController', ['only' => ['store']])->middleware('throttle:20, 1');
    Route::resource('words', 'WordsController', ['only' => ['destroy']]);
    Route::resource('all', 'BooksAllController',['only' => ['index']]);
    Route::get('favorite', 'WordbooksController@favorite')->name('wordbooks.favorite');
    
    Route::group(['prefix' => 'workbooks/{id}'], function () {
        Route::resource('words', 'WordsController', ['only' => ['create']]);
        Route::resource('learning', 'LearningsController', ['only' => ['index']]);
                Route::get('next', 'LearningsController@next')->name('learning.next');
    });
    Route::get('/tags/{name}', 'TagController@show')->name('tags.show');
});

// お気に入り機能
Route::prefix('wordbook')->name('wordbook.')->group(function () {
    Route::put('/{wordbook}/like', 'WordbooksController@like')->name('like')->middleware('auth');
    Route::delete('/{wordbook}/like', 'WordbooksController@unlike')->name('unlike')->middleware('auth');
});


// Route::view('/wordbook_registration', 'wordbook_registration');
Route::get('word/{id}', 'WordsController@index')->name('word.index');