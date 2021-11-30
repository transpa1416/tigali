<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\ExamQuestions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WriterExamController extends Controller
{
    public function writerExam()
    {
        return view('coursePage.includes.writer.modules.finalExam.writerExam');
    }


    public function list(Request $request)
    {

    }
}
