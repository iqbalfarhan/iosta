<?php

namespace App\Http\Livewire;

use App\Models\LogPeruntukan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class BaRekon extends Component
{
    public function downloadba(LogPeruntukan $logperuntukan)
    {
        $filename = implode(" - ", [
            $logperuntukan->lokasi()->nama,
            $logperuntukan->klasifikasi_baru,
            $logperuntukan->peruntukan_baru,
        ]);

        return Storage::download($logperuntukan->fileba, $filename);
    }
    public function render()
    {
        return view('livewire.ba-rekon', [
            'datas' => LogPeruntukan::whereNotNull('fileba')->get()
        ]);
    }
}