<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class ManualController extends Controller
{
    public function downloadPdf()
    {
        $pdf = PDF::loadView('pages.manual');
        return $pdf->download('manual.pdf');
    }
}
