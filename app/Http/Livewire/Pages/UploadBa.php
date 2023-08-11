<?php

namespace App\Http\Livewire\Pages;

use App\Helpers\Quartal;
use App\Models\Barekon;
use App\Models\Lokasi;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadBa extends Component
{
    use WithFileUploads;

    public $lokasi_id;
    public $witel;
    public $witels;
    public $fileba;
    public $luas;
    public $br;
    public $sc;
    public $status;
    public $durasi = 3;
    public $layanan = 4;

    protected $fillable = [
        'reload' => '$refresh'
    ];

    public function mount()
    {
        $witel = auth()->user()->witel;

        if ($witel == "REGIONAL") {
            $this->witels = config('ios.listWitel');
        } else {
            $this->witels = [$witel];
        }
        $this->witel = $witel;
    }

    public function simpan()
    {
        $this->validate([
            'lokasi_id' => 'required',
            'luas' => 'required',
            'br' => '',
            'sc' => '',
            'status' => '',
            'durasi' => '',
            'layanan' => '',
            'fileba' => '',
        ]);

        if ($this->fileba) {
            $filename = $this->fileba->hashName('barekon');
            $this->fileba->store('barekon');
        }

        $create = [
            'kode_q' => Quartal::now()['code'],
            'lokasi_id' => $this->lokasi_id,
            'luas' => $this->luas,
            'br' => $this->br,
            'sc' => $this->sc,
            'status' => $this->status,
            'durasi' => $this->durasi,
            'layanan' => $this->layanan,
            'fileba' => $filename ?? null,
        ];

        Barekon::create($create);

        return redirect()->route('ba-rekon');
    }

    public function render()
    {
        return view('livewire.pages.upload-ba', [
            'gedungs' => Lokasi::where('witel', $this->witel)->get()->pluck('nama', 'id'),
            'quartal' => Quartal::now()
        ]);
    }
}