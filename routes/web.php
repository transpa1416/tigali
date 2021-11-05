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

Route::get('/', function () { return view('/homePage/home'); });
Route::get('/course', function () { return view('/coursePage/course'); });
Route::get('/course/writer/cap1', function () { return view('/coursePage/includes/writer/cap1'); });
Route::get('/course/writer/cap2', function () { return view('/coursePage/includes/writer/cap2'); });
Route::get('/course/writer/cap3', function () { return view('/coursePage/includes/writer/cap3'); });
Route::get('/course/writer/cap4', function () { return view('/coursePage/includes/writer/cap4'); });
Route::get('/course/writer/cap5', function () { return view('/coursePage/includes/writer/cap5'); });
