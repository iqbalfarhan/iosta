<?php

namespace App\Http\Controllers;

use App\Models\LogPeruntukan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function peruntukan()
    {
        $pdf = Pdf::loadView('layouts/templates/peruntukan', [
            'datas' => LogPeruntukan::get()
        ]);
        return $pdf->download('invoice.pdf');

        // return view('layouts/templates/peruntukan', ['datas' => LogPeruntukan::get()]);
    }
}