<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UsersHasOpportunities;

use PDF;

class CertificateController extends Controller {

    // Export to PDF
    public function exportPDF() {

        set_time_limit(300);

        $query = UsersHasOpportunities::with(['user'])
        ->where('users_id', '=', auth()->id())
        ->where('examsModule_id', '=', '2')
        ->first();

        return view('export_pdf', ['name' => auth()->user()->name, 'score' => $query->score]);



    }
}
