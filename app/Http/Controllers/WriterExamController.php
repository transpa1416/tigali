<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\UsersHasOpportunities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WriterExamController extends Controller
{
    public function writerExam()
    {
        $query = UsersHasOpportunities::with(['user'])
        ->where('users_id', '=', auth()->id())
        ->where('examsModule_id', '=', '2')
        ->first();
        if ($query)
        {
            if ($query->isActive) {
                return view('coursePage.includes.writer.modules.finalExam.writerExam');
            } else {
                return view('coursePage.includes.writer.modules.finalExam.passExam');
            }
        } else {
            $opp = new UsersHasOpportunities();
            $opp->users_id = auth()->id();
            $opp->examsModule_id = 2;
            $opp->countOpportunities = 0;
            $opp->isActive = 1;
            $opp->save();

            return view('coursePage.includes.writer.modules.finalExam.writerExam');
        }

    }


    public function list(Request $request)
    {

    }
}
