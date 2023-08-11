<?php

namespace App\Http\Livewire\Pages;

use App\Helpers\Quartal;
use App\Models\Barekon;
use App\Models\Lokasi;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadBa extends Component
{
    use WithFileUploads;
    public $witel;
    public $witels;
    public $lokasi_id;
    public $fileba;

    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function mount()
    {
        $witel = auth()->user()->witel;

        if ($witel == "REGIONAL") {
            $this->witel = $witel;
            $this->witels = config('app.listWitel');
        } else {
            $this->witels = [$witel];
        }
    }

    public function existData($kode_q, $lokasi_id)
    {
        return Barekon::where('lokasi_id', $lokasi_id)->where('kode_q', $kode_q)->first() ? true : false;
    }

    public function uploadba()
    {
        $valid = $this->validate([
            'lokasi_id' => 'required',
            'fileba' => 'required',
        ]);

        $filename = $this->fileba->hashName('barekon');
        $this->fileba->store('barekon');

        $valid['fileba'] = $filename;
        $valid['kode_q'] = Quartal::now()['code'];

        Barekon::create($valid);
        $this->reset([
            'fileba',
            'lokasi_id',
        ]);
        $this->emit('reload');
    }

    public function download($kode_q, $lokasi_id)
    {
        $barekon = Barekon::where('lokasi_id', $lokasi_id)->where('kode_q', $kode_q)->first();
        if ($barekon) {
            $filename = implode(' - ', [
                'IOSTA',
                $barekon->kode_q,
                $barekon->lokasi->nama,
            ]);
            return Storage::download($barekon->fileba, $filename);
        }
    }

    public function render()
    {
        return view('livewire.pages.upload-ba', [
            'lokasis' => $this->witels ? Lokasi::whereIn('witel', $this->witels)->get()->pluck('nama', 'id') : [],
            'year' => date('Y')
        ]);
    }
}