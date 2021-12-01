<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use PDF;

class CertificateController extends Controller {

    // Export to PDF
    public function exportPDF() {

        $data = [
            'foo' => 'bar'
          ];
          $pdf = PDF::loadView('export_pdf', $data);
          return $pdf->download('document.pdf');

        /* set_time_limit(300);
        $p = User::all();

        view()->share('p', $p); */


/*         $mpdf = new \Mpdf\Mpdf(array(
            'margin_top' => 65,     // 10mm
            'margin_bottom' => 50,     // 10mm

        ));

        $mpdf = PDF::loadView('export_pdf', $p);
        $mpdf->Output();
        return $mpdf->stream('certificate.pdf'); */

    }
}
