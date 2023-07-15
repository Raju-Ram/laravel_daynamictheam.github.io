<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// * *************************user start****************************//

Route::get('/index','App\Http\controllers\Backend\IndexController@index');

// * sidebaar start
Route::get('/adduser','App\Http\controllers\Backend\UserController@add');
Route::post('/adduser','App\Http\controllers\Backend\UserController@addform');
Route::get('/addlist','App\Http\controllers\Backend\UserController@addlist');
// * sidebaar end


// * add edit update start
Route::get('/showuserlist','App\Http\controllers\Backend\UserController@showuserlist');
Route::get('/edituserlist/{id}','App\Http\controllers\Backend\UserController@edituserlist');
Route::post('/edituserlist/{id}','App\Http\controllers\Backend\UserController@updateUser');
Route::get('/deleteUser/{id}','App\Http\controllers\Backend\UserController@deleteUser');
// * add edit update start

//*****************************user end*****************************//




//**************************** banner start ***********************//
Route::get('/addbanner','App\Http\controllers\Backend\BannerController@addbanner');
Route::post('/addbanner','App\Http\controllers\Backend\BannerController@insertbanner');
Route::get('/showbannerlist','App\Http\controllers\Backend\BannerController@showbannerlist');
// Route::get('/deletebanner/{id}','App\Http\controllers\BannerController@deletebanner');
//*****************************  banner end ***********************//


//**************************** cmc start ***********************//
Route::get('/addcmc','App\Http\controllers\Backend\CmcController@addcmc');
Route::post('/addcmc','App\Http\controllers\Backend\CmcController@insertcmc');
Route::get('/showcmclist','App\Http\controllers\Backend\CmcController@showcmclist');
Route::get('/status-update/{id}','App\Http\controllers\Backend\CmcController@status');
// Route::get('/addlist','App\Http\controllers\CmcController@addlist');




//**************************** cmc end ***********************//