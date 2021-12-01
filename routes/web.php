<?php

use App\Http\Controllers\CalcExamController;
use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LibreOfficeCalcController;
use App\Http\Controllers\WriterExamController;
use phpseclib3\File\ASN1\Maps\Certificate;

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
Route::get('recovery', [CustomAuthController::class, 'recoveryPassword'])->name('recovery');
Route::post('recovery-password', [CustomAuthController::class, 'changePassword'])->name('recovery.password');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('course/writer/finalEvaluation', [WriterExamController::class, 'writerExam'])->name('writer.Exam');
Route::post('course/writer/evaluate', [WriterExamController::class, 'writerExam'])->name('writer.exam.evaluate');
Route::get('course/calc/finalEvaluation', [CalcExamController::class, 'calcExam'])->name('calc.Exam');


Route::get('course/writer/create-pdf', [CertificateController::class, 'exportPDF']);
Route::get('course/writer/view-pdf', function () { return view('/export_pdf'); });

//Curso Writer
Route::get('/course/writer', function () { return view('/coursePage/includes/writer/modules/intro'); });
/* sesiones Zoom */
Route::get('/course/writer/module/zoom/17nov', function () { return view('/coursePage/includes/writer/modules/zoom/17nov'); });
Route::get('/course/writer/module/zoom/18nov', function () { return view('/coursePage/includes/writer/modules/zoom/18nov'); });
Route::get('/course/writer/module/zoom/19nov', function () { return view('/coursePage/includes/writer/modules/zoom/19nov'); });
Route::get('/course/writer/module/zoom/22nov', function () { return view('/coursePage/includes/writer/modules/zoom/22nov'); });
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
Route::get('/course/writer/module/09/hyperlink', function () { return view('/coursePage/includes/writer/modules/09/hyperlink'); });
Route::get('/course/writer/module/09/crossReference', function () { return view('/coursePage/includes/writer/modules/09/crossReference'); });
/* Módulo 10 */
Route::get('/course/writer/module/10/tags', function () { return view('/coursePage/includes/writer/modules/10/tags'); });
Route::get('/course/writer/module/10/matchingTool', function () { return view('/coursePage/includes/writer/modules/10/matchingTool'); });

//Curso Calc
Route::get('/course/calc', function () { return view('/coursePage/includes/calc/modules/intro'); });
/*Sesiones Zoom*/
Route::get('/course/calc/module/zoom/24nov', function () { return view('/coursePage/includes/calc/modules/zoom/24nov'); });
Route::get('/course/calc/module/zoom/25nov', function () { return view('/coursePage/includes/calc/modules/zoom/25nov'); });
Route::get('/course/calc/module/zoom/26nov', function () { return view('/coursePage/includes/calc/modules/zoom/26nov'); });
/* Módulo 01 */
Route::get('/course/calc/module/01/environment', function () { return view('/coursePage/includes/calc/modules/01/environment'); });
Route::get('/course/calc/module/01/introduction', function () { return view('/coursePage/includes/calc/modules/01/introduction'); });
/* Módulo 02 */
Route::get('/course/calc/module/02/practice', function () { return view('/coursePage/includes/calc/modules/02/practice'); });
Route::get('/course/calc/module/02/basicFunctions', function () { return view('/coursePage/includes/calc/modules/02/basicFunctions'); });
/* Módulo 03 */
Route::get('/course/calc/module/03/practice', function () { return view('/coursePage/includes/calc/modules/03/practice'); });
Route::get('/course/calc/module/03/basicFunctions', function () { return view('/coursePage/includes/calc/modules/03/basicFunctions'); });
/* Módulo 04 */
Route::get('/course/calc/module/04/practice', function () { return view('/coursePage/includes/calc/modules/04/practice'); });
Route::get('/course/calc/module/04/page', function () { return view('/coursePage/includes/calc/modules/04/page'); });
Route::get('/course/calc/module/04/formatPage', function () { return view('/coursePage/includes/calc/modules/04/formatPage'); });
/* Módulo 05 */
Route::get('/course/calc/module/05/practice', function () { return view('/coursePage/includes/calc/modules/05/practice'); });
Route::get('/course/calc/module/05/image', function () { return view('/coursePage/includes/calc/modules/05/image'); });
Route::get('/course/calc/module/05/formatImage', function () { return view('/coursePage/includes/calc/modules/05/formatImage'); });
Route::get('/course/calc/module/05/barImage', function () { return view('/coursePage/includes/calc/modules/05/barImage'); });
/* Módulo 06 */
Route::get('/course/calc/module/06/spelingCorrection', function () { return view('/coursePage/includes/calc/modules/06/spelingCorrection'); });
Route::get('/course/calc/module/06/practice', function () { return view('/coursePage/includes/calc/modules/06/practice'); });
/* Módulo 07 */
Route::get('/course/calc/module/07/graphs', function () { return view('/coursePage/includes/calc/modules/07/graphs'); });
Route::get('/course/calc/module/07/practice', function () { return view('/coursePage/includes/calc/modules/07/practice'); });
/* Módulo 08 */
Route::get('/course/calc/module/08/filter', function () { return view('/coursePage/includes/calc/modules/08/filter'); });
/* Módulo 09 */
Route::get('/course/calc/module/09/advancedFunctions', function () { return view('/coursePage/includes/calc/modules/09/advancedFunctions'); });
Route::get('/course/calc/module/09/logic', function () { return view('/coursePage/includes/calc/modules/09/logic'); });
/* Módulo 10 */
Route::get('/course/calc/module/10/conditional', function () { return view('/coursePage/includes/calc/modules/10/conditional'); });
/* Módulo 11 */
Route::get('/course/calc/module/11/dinamic', function () { return view('/coursePage/includes/calc/modules/11/dinamic'); });
