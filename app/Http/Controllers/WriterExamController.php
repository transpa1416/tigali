<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersHasOpportunities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
                return view('coursePage.includes.writer.modules.finalExam.writerExam', ['count' => (3 - $query->countOpportunities)]);
            } else {
                return view('coursePage.includes.writer.modules.finalExam.passExam');
            }
        } else {
            $opp = new UsersHasOpportunities();
            $opp->users_id = auth()->id();
            $opp->examsModule_id = 2;
            $opp->countOpportunities = 0;
            $opp->score = 0;
            $opp->isActive = 1;
            $opp->save();
            return view('coursePage.includes.writer.modules.finalExam.writerExam', ['count' => 3]);
        }
    }


    public function evaluate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qw01' => 'required',
            'qw02' => 'required',
            'qw03' => 'required',
            'qw04' => 'required',
            'qw05' => 'required',
            'qw06' => 'required',
            'qw07' => 'required',
            'qw08' => 'required',
            'qw09' => 'required',
            'qw10' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errorValidate', 'Todas las preguntas son requeridas, vuelvelo a intentar');
        }

        $count = 0;
        if ($request->get('qw01') == 'A' ) {
            $count++;
        }
        if ($request->get('qw02') == 'A' ) {
            $count++;
        }
        if ($request->get('qw03') == 'C' ) {
            $count++;
        }
        if ($request->get('qw04') == 'B' ) {
            $count++;
        }
        if ($request->get('qw05') == 'D' ) {
            $count++;
        }
        if ($request->get('qw06') == 'A' ) {
            $count++;
        }
        if ($request->get('qw07') == 'A' ) {
            $count++;
        }
        if ($request->get('qw08') == 'B' ) {
            $count++;
        }
        if ($request->get('qw09') == 'A' ) {
            $count++;
        }
        if ($request->get('qw10') == 'B' ) {
            $count++;
        }

        if ($count >= 8) {
            DB::connection()->table('usershasopportunities')
                ->where('users_id', '=', auth()->id())
                ->where('examsModule_id', '=', '2')
                ->update(['score' => $count, 'isActive' => 0]);

            return view('coursePage.includes.writer.modules.finalExam.passExam');
        } else {
            DB::table('usershasopportunities')
                ->where('users_id', auth()->id())
                ->where('examsModule_id', '=', '2')
                ->increment('countOpportunities');
            return back()->with('errorValidate', 'Ops, no lo hiciste bien, vuelve a intentarlo');
        }
    }
}
