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
Route::get('/register' , 'RegisterController@create');
Route::post('/register' , 'RegisterController@store');



Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@doLogin');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout', 'HomeController@logout')->name('home');
Route::get('/addNewTask' , 'employerCotroller@addNewTask');

Route::post('/addNewTask' , 'TaskController@create');
Route::get('/getSkills' , 'skillController@get');

Route::get('/tasks', 'TaskController@show');
Route::get('/getTasks'  , 'TaskController@all');
Route::get('/freelancer_task_qu' , 'freelancerController@isQualifedForTask');
Route::post('/addNewSkills' , 'freelancerController@addNewSkills');

Route::get('/{username}' , 'ProfileController@show');
Route::get('/tasks/{taskid}', 'TaskController@get')->middleware('auth');

Route::post('/applyOffer' , 'OfferController@applyOffer');
Route::post('/getRate/{profile_id}' , 'TaskController@getRate');


