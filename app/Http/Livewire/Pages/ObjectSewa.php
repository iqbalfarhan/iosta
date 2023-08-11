<?php

namespace App\Http\Livewire\Pages;

use App\Exports\LogPeruntukanExport;
use App\Models\LogPeruntukan;
use App\Models\Lokasi;
use App\Models\Peruntukan;
// use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class ObjectSewa extends Component
{
    public $witels;
    public $cari;
    public $witel;
    public $lokasi_id;
    public $fungsi;
    public $klasifikasi;
    public $peruntukan;

    public function hapusPeruntukan(Peruntukan $peruntukan)
    {
        $peruntukan->delete();
    }

    function mount()
    {
        $witel = auth()->user()->witel;

        if ($witel == "REGIONAL") {
            $this->witels = config('ios.listWitel');
            $this->witel = "";
        } else {
            $this->witels = [$witel];
        }
    }

    public function downloadba(Peruntukan $peruntukan)
    {
        $filename = implode(" ", [
            $peruntukan->lokasi->nama,
            '-',
            $peruntukan->peruntukan,
        ]);

        return Storage::download($peruntukan->fileba, $filename);
    }

    public function downloadPdf()
    {
        $datas = LogPeruntukan::get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('layouts.templates.excel', [
            'datas' => $datas
        ]);
        return $pdf->download('invoice.pdf');
    }

    public function downloadExcel()
    {
        return Excel::download(new LogPeruntukanExport, 'object sewa.xlsx');
    }

    public function render()
    {
        $datas = Peruntukan::when($this->peruntukan, function ($q) {
            $q->where('peruntukan', 'like', '%' . $this->cari . '%');
        })->when($this->witel, function ($q) {
            $q->lokasi->where('witel', $this->witel);
        })->get();

        return view('livewire.pages.object-sewa', [
            'datas' => $datas,
            'lokasis' => Lokasi::where('witel', $this->witel)->get()->pluck('gedung', 'id')
        ]);
    }
}