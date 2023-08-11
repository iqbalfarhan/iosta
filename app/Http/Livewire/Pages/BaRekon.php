<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class BaRekon extends Component
{
    public $witel;
    public $sto;
    public function downloadba($logperuntukan)
    {
        // $filename = implode(" - ", [
        //     $logperuntukan->lokasi()->nama,
        //     $logperuntukan->klasifikasi_baru,
        //     $logperuntukan->peruntukan_baru,
        // ]);

        // return Storage::download($logperuntukan->fileba, $filename);
    }

    public function render()
    {
        $datas = Lokasi::when($this->witel, function ($q) {
            $q->where('witel', $this->witel);
        })->when($this->sto, function ($q) {
            $q->where('nama', 'like', '%' . $this->sto . '%');
        })->get();

        return view('livewire.pages.ba-rekon', [
            'datas' => $datas
        ]);
    }
}