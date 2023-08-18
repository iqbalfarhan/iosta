<?php

namespace App\Http\Controllers;

use App\Models\LogPeruntukan;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function peruntukan()
    {
        $pdf = Pdf::loadView('layouts/templates/peruntukan', [
            'datas' => LogPeruntukan::get()
        ]);
        return $pdf->download('peruntukan.pdf');

        // return view('layouts/templates/peruntukan', ['datas' => LogPeruntukan::get()]);
    }
}