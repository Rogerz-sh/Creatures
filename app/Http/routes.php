<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('site.index');
});

Route::controller('site', 'SiteController');

//Route::group(['prefix' => 'user'], function () {
//
//    Route::get('/', function () {
//        return view('user.index');
//    });
//
//    Route::get('login', 'UserController@login');
//
//    Route::get('{id}', 'UserController@index');
//
//});

Route::controller('user', 'UserController');

Route::controller('account', 'AccountController');


Route::group(['middleware' => 'login'], function () {

    Route::controller('enterprise', 'EnterpriseController');

    Route::controller('job', 'JobController');

    Route::controller('resume', 'ResumeController');

    Route::controller('meeting', 'MeetingController');

    Route::controller('search', 'SearchController');

});
