<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class LokasiDetail extends Component
{

    protected $listeners = [
        'reload' => '$refresh'
    ];

    public $data;
    public function mount(Lokasi $lokasi)
    {
        $this->data = $lokasi;
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

    public function render()
    {
        return view('livewire.pages.settings.lokasi-detail');
    }
}