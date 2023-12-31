<?php

namespace App\Http\Livewire\Pages;

use App\Exports\LogPeruntukanExport;
use App\Models\Lokasi;
use App\Models\Peruntukan;
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
    public $status;

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
            $this->witel = $witel;
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
        return redirect()->route('pdf.peruntukan');
    }

    public function downloadExcel()
    {
        return Excel::download(new LogPeruntukanExport, 'object sewa.xlsx');
    }

    public function resetFilter()
    {
        $this->reset([
            'lokasi_id',
            'fungsi',
            'klasifikasi',
            'peruntukan',
        ]);
    }

    public function render()
    {
        $datas = Peruntukan::when($this->peruntukan, function ($q) {
            $q->where('peruntukan', 'like', '%' . $this->peruntukan . '%');
        })->when($this->klasifikasi, function ($q) {
            $q->where('klasifikasi', $this->klasifikasi);
        })->when($this->fungsi, function ($q) {
            $q->where('fungsi', $this->fungsi);
        })->when($this->witel, function ($q) {
            $q->whereHas('lokasi', function ($subQuery) {
                $subQuery->where('witel', $this->witel);
            });
        })->get();

        return view('livewire.pages.object-sewa', [
            'datas' => $datas,
            'lokasis' => Lokasi::where('witel', $this->witel)->get()->pluck('nama', 'id')
        ]);
    }
}