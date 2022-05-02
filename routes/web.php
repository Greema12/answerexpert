<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/' ,'indexController@index');



Route::get('/Blog/blogdetail/{id}/{main_que}' ,'indexController@blogdetail');


Route::get('/Layout/index', 'indexController@search');

//230 line ma hide search bar