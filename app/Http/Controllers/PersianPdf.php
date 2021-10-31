<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PersianPdf extends Controller
{


    public function pdf(){
        // return base_path();
        $pdf = PDF::loadView('pdf');
	    return $pdf->stream('document.pdf');
    }


}
