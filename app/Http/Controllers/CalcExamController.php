<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersHasOpportunities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CalcExamController extends Controller
{
    public function calcExam()
    {
        $query = UsersHasOpportunities::with(['user'])
        ->where('users_id', '=', auth()->id())
        ->where('examsModule_id', '=', '1')
        ->first();
        if ($query)
        {
            if ($query->isActive) {
                return view('coursePage.includes.calc.modules.finalExam.calcExam', ['count' => (3 - $query->countOpportunities)]);
            } else {
                return view('coursePage.includes.calc.modules.finalExam.passExam');
            }
        } else {
            $opp = new UsersHasOpportunities();
            $opp->users_id = auth()->id();
            $opp->examsModule_id = 1;
            $opp->countOpportunities = 0;
            $opp->score = 0;
            $opp->isActive = 1;
            $opp->save();
            return view('coursePage.includes.calc.modules.finalExam.calcExam', ['count' => 3]);
        }
    }


    public function evaluate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qc01' => 'required',
            'qc02' => 'required',
            'qc03' => 'required',
            'qc04' => 'required',
            'qc05' => 'required',
            'qc06' => 'required',
            'qc07' => 'required',
            'qc08' => 'required',
            'qc09' => 'required',
            'qc10' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errorValidate', 'Todas las preguntas son requeridas, vuelvelo a intentar');
        }

        $count = 0;
        if ($request->get('qc01') == 'A' ) {
            $count++;
        }
        if ($request->get('qc02') == 'D' ) {
            $count++;
        }
        if ($request->get('qc03') == 'C' ) {
            $count++;
        }
        if ($request->get('qc04') == 'A' ) {
            $count++;
        }
        if ($request->get('qc05') == 'B' ) {
            $count++;
        }
        if ($request->get('qc06') == 'D' ) {
            $count++;
        }
        if ($request->get('qc07') == 'C' ) {
            $count++;
        }
        if ($request->get('qc08') == 'D' ) {
            $count++;
        }
        if ($request->get('qc09') == 'A' ) {
            $count++;
        }
        if ($request->get('qc10') == 'D' ) {
            $count++;
        }

        if ($count >= 8) {
            DB::connection()->table('UsersHasOpportunities')
                ->where('users_id', '=', auth()->id())
                ->where('examsModule_id', '=', '1')
                ->update(['score' => $count, 'isActive' => 0]);

            return view('coursePage.includes.calc.modules.finalExam.passExam');
        } else {
            DB::table('UsersHasOpportunities')
                ->where('users_id', auth()->id())
                ->where('examsModule_id', '=', '1')
                ->increment('countOpportunities');
            return back()->with('errorValidate', 'Ops, no lo hiciste bien, vuelve a intentarlo');
        }
    }
}
