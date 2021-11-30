<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\ExamQuestions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CalcExamController extends Controller
{
    public function calcExam()
    {
        return view('coursePage.includes.calc.modules.finalExam.calcExam');
    }


    public function list(Request $request)
    {

    }
}
