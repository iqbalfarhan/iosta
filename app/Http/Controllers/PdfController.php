<?php

namespace App\Http\Controllers;

use App\Helpers\Quartal;
use App\Models\LogPeruntukan;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function peruntukan()
    {
        $quartal = Quartal::now();

        $pdf = Pdf::loadView('layouts/templates/peruntukan', [
            'datas' => LogPeruntukan::get(),
            'quartal' => $quartal
        ]);

        $filename = implode('-', [
            'IOSTA',
            'PERUNTUKAN',
            strtoupper($quartal['code']),
            time()
        ]);

        return $pdf->download($filename . '.pdf');
    }
}