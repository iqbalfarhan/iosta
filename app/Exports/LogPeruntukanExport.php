<?php

namespace App\Exports;

use App\Helpers\Quartal;
use App\Models\LogPeruntukan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class LogPeruntukanExport implements FromView
{
    public function view(): View
    {
        $quartal = Quartal::now()['code'];

        return view('layouts.templates.excel', [
            'datas' => LogPeruntukan::where('kode_q', $quartal)->get()
        ]);
    }
}