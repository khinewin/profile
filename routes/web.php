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

Route::get('/',[
    'uses'=>'HomeController@getWelcome',
    'as'=>'/'
]);

Route::group(['middleware'=>'auth'], function (){

    Route::group(['prefix'=>'user'],function (){
        Route::get('/dashboard', [
            'uses'=>'UserController@getDashboard',
            'as'=>'dashboard'
        ]);

        Route::get('/logout',[
            'uses'=>'UserController@getLogout',
            'as'=>'logout'
        ]);

        Route::get('/profile',[
            'uses'=>'UserController@getProfile',
            'as'=>'profile'
        ]);
        Route::post('/upload',[
            'uses'=>'UserController@postUploadProfile',
            'as'=>'upload.profile'
        ]);

       

    });

    Route::group(['prefix'=>'posts'],function (){
        Route::get('/class',[
            'uses'=>'ClassController@getClass',
            'as'=>'class'
        ]);
        Route::post('/new_class',[
            'uses'=>'ClassController@postNewClass',
            'as'=>'new_class'
        ]);
        Route::get('/delete-class/{id}',[
            'uses'=>'ClassController@getDeleteClass',
            'as'=>'delete.class'
        ]);
    });

});

Route::group(['prefix'=>'auth'], function (){
    Route::get('/login',[
        'uses'=>'AuthController@getLogin',
        'as'=>'login'
    ]);
    Route::post('/login',[
        'uses'=>'AuthController@postLogin',
        'as'=>'login'
    ]);
    Route::group(['middleware'=>'auth'],function (){
        Route::get('/register',[
            'uses'=>'AuthController@getRegister',
            'as'=>'register'
        ]);
        Route::post('/register',[
            'uses'=>'AuthController@postRegister',
            'as'=>'register'
        ]);
    });

});

