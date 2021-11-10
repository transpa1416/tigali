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

//Curso Writer
Route::get('/course/writer', function () { return view('/coursePage/includes/writer/modules/intro'); });
Route::get('/course/writer/module/01/environment', function () { return view('/coursePage/includes/writer/modules/01/environment'); });
Route::get('/course/writer/module/02/formatText', function () { return view('/coursePage/includes/writer/modules/02/formatText'); });
Route::get('/course/writer/cap1', function () { return view('/coursePage/includes/writer/cap1'); });
Route::get('/course/writer/cap2', function () { return view('/coursePage/includes/writer/cap2'); });
Route::get('/course/writer/cap3', function () { return view('/coursePage/includes/writer/cap3'); });
Route::get('/course/writer/cap4', function () { return view('/coursePage/includes/writer/cap4'); });
Route::get('/course/writer/cap5', function () { return view('/coursePage/includes/writer/cap5'); });

//Curso Calc
Route::get('/course/calc', function () { return view('/coursePage/includes/writer/introduccion/intro'); });
Route::get('/course/calc/cap1', function () { return view('/coursePage/includes/calc/cap1'); });
Route::get('/course/calc/cap2', function () { return view('/coursePage/includes/calc/cap2'); });
Route::get('/course/calc/cap3', function () { return view('/coursePage/includes/calc/cap3'); });
Route::get('/course/calc/cap4', function () { return view('/coursePage/includes/calc/cap4'); });
Route::get('/course/calc/cap5', function () { return view('/coursePage/includes/calc/cap5'); });
Route::get('/course/calc/cap6', function () { return view('/coursePage/includes/calc/cap6'); });
