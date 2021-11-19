<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

//Rutas para el logeo/registro de usuarios
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Curso Writer
Route::get('/course/writer', function () { return view('/coursePage/includes/writer/modules/intro'); });
/* Módulo 01 */
Route::get('/course/writer/module/01/environment', function () { return view('/coursePage/includes/writer/modules/01/environment'); });
Route::get('/course/writer/module/01/settings', function () { return view('/coursePage/includes/writer/modules/01/settings'); });
Route::get('/course/writer/module/01/documentActions', function () { return view('/coursePage/includes/writer/modules/01/documentActions'); });
Route::get('/course/writer/module/01/practice01', function () { return view('/coursePage/includes/writer/modules/01/practice01'); });
/* Módulo 02 */
Route::get('/course/writer/module/02/formatText', function () { return view('/coursePage/includes/writer/modules/02/formatText'); });
Route::get('/course/writer/module/02/basicSeetings', function () { return view('/coursePage/includes/writer/modules/02/basicSeetings'); });
Route::get('/course/writer/module/02/vignette', function () { return view('/coursePage/includes/writer/modules/02/vignette'); });
Route::get('/course/writer/module/02/practice01', function () { return view('/coursePage/includes/writer/modules/02/practice01'); });
/* Módulo 03 */
Route::get('/course/writer/module/03/styles', function () { return view('/coursePage/includes/writer/modules/03/styles'); });
/* Módulo 04 */
Route::get('/course/writer/module/04/formatPage', function () { return view('/coursePage/includes/writer/modules/04/formatPage'); });
Route::get('/course/writer/module/04/headerFooter', function () { return view('/coursePage/includes/writer/modules/04/headerFooter'); });
Route::get('/course/writer/module/04/printerOptions', function () { return view('/coursePage/includes/writer/modules/04/printerOptions'); });
Route::get('/course/writer/module/04/exportToPDF', function () { return view('/coursePage/includes/writer/modules/04/exportToPDF'); });
/* Módulo 05 */
Route::get('/course/writer/module/05/insertImage', function () { return view('/coursePage/includes/writer/modules/05/insertImage'); });
Route::get('/course/writer/module/05/imageLink', function () { return view('/coursePage/includes/writer/modules/05/imageLink'); });
Route::get('/course/writer/module/05/applyEffect', function () { return view('/coursePage/includes/writer/modules/05/applyEffect'); });
/* Módulo 06 */
Route::get('/course/writer/module/06/spelingCorrection', function () { return view('/coursePage/includes/writer/modules/06/spelingCorrection'); });
Route::get('/course/writer/module/06/grammarCorrection', function () { return view('/coursePage/includes/writer/modules/06/grammarCorrection'); });
Route::get('/course/writer/module/06/synonymous', function () { return view('/coursePage/includes/writer/modules/06/synonymous'); });
/* Módulo 07 */
Route::get('/course/writer/module/07/columnsSections', function () { return view('/coursePage/includes/writer/modules/07/columnsSections'); });
Route::get('/course/writer/module/07/createTable', function () { return view('/coursePage/includes/writer/modules/07/createTable'); });
/* Módulo 08 */
Route::get('/course/writer/module/08/squareText', function () { return view('/coursePage/includes/writer/modules/08/squareText'); });
/* Módulo 09 */
/* Módulo 10 */

//Curso Calc
Route::get('/course/calc', function () { return view('/coursePage/includes/writer/introduccion/intro'); });

