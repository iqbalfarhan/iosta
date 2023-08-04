<?php

namespace App\Http\Livewire\Peruntukan;

use App\Models\LogPeruntukan;
use App\Models\Peruntukan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Show extends Component
{
    public $data;

    public function mount(Peruntukan $peruntukan)
    {
        $this->data = $peruntukan;
    }

    public function downloadba(LogPeruntukan $logperuntukan)
    {
        $filename = implode(" ", [
            $logperuntukan->lokasi->nama,
            '-',
            $logperuntukan->peruntukan_baru,
        ]);

        return Storage::download($logperuntukan->fileba, $filename);
    }

    public function render()
    {
        return view('livewire.peruntukan.show');
    }
}